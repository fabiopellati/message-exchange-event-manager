<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 23/06/17
 * Time: 14.29
 */

namespace MessageExchangeEventManager;

use MessageExchangeEventManager\Event\Event;
use MessageExchangeEventManager\Event\EventInterface;
use MessageExchangeEventManager\Response\Response;

trait EventRunAwareTrait
{

    /**
     * @param                                                   $eventName
     *
     * @param \MessageExchangeEventManager\Event\EventInterface $event
     *
     * @return Response
     * @throws \RuntimeException
     */
    protected function triggerEvent($eventName, EventInterface $event)
    {
        $event->setName($eventName);
        $event->setTarget($this);

        $responses = $this->getEventManager()->triggerEvent($event);
        if ($responses->count() === 0) {
            return $event->getResponse();
        } else {
            $response = $responses->last();
        }

        return $response;
    }

    /**
     * run Event in three step preEvent, event and postEvent
     *
     *
     *
     * @param \MessageExchangeEventManager\Event\Event $event
     * @param  string                                  $eventRunPre
     * @param  string                                  $eventRun
     * @param  string                                  $eventRunPost
     *
     * @return \MessageExchangeEventManager\Response\Response
     */
    protected function runEvent(Event $event, $eventRunPre, $eventRun, $eventRunPost)
    {
        try {
            $steps = [$eventRunPre, $eventRun, $eventRunPost];
            foreach ($steps as $step) {
                $response = $this->triggerEvent($step, $event);
                if ($event->propagationIsStopped()) {
                    $event->stopPropagation(false);
                }
            }
            if (!isset($response) || !$response instanceof Response) {
                throw new \RuntimeException('last response unattended, is attended \MessageExchangeEventManager\Response\Response',
                                            500);
            }
            if ($response->getContent() instanceof \Exception) {
                throw  $response->getContent();
            }

        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getStatusCode(), $e->getPrevious()->getFile(),
                                        $e->getPrevious()->getLine());

        }

        return $response;

    }
}