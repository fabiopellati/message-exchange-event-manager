<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
 */
namespace MessageExchangeEventManager;

use MessageExchangeEventManager\Event\MessageExchangeEvent;
use MessageExchangeEventManager\Event\MessageExchangeEventInterface;
use MessageExchangeEventManager\Response\Response;

trait EventRunAwareTrait
{

    /**
     * @param                                                   $eventName
     *
     * @param \MessageExchangeEventManager\Event\MessageExchangeEventInterface $event
     *
     * @return Response
     * @throws \RuntimeException
     */
    protected function triggerEvent($eventName, MessageExchangeEventInterface $event)
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
     * @param \MessageExchangeEventManager\Event\MessageExchangeEvent $event
     * @param  string                                                 $eventRunPre
     * @param  string                                                 $eventRun
     * @param  string                                                 $eventRunPost
     *
     * @return \MessageExchangeEventManager\Response\Response
     */
    protected function runEvent(MessageExchangeEvent $event, $eventRunPre, $eventRun, $eventRunPost)
    {
        try {
            $steps = [$eventRunPre, $eventRun, $eventRunPost];
            foreach ($steps as $step) {
                $response = $this->triggerEvent($step, $event);
                if (!isset($response) || !$response instanceof Response) {
                    throw new \RuntimeException('last response unattended, is attended \MessageExchangeEventManager\Response\Response',
                                                500);
                }
                if ($response->getContent() instanceof \Exception) {
                    throw  $response->getContent();
                }
                if ($event->propagationIsStopped()) {
                    $event->stopPropagation(false);
                }
            }
            if (!isset($response) || !$response instanceof Response) {
                throw new \RuntimeException('last response unattended, is attended \MessageExchangeEventManager\Response\Response',
                                            500);
            }

            return $response;

        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage(), $e->getCode(), $e->getPrevious());

        }

    }
}