<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 23/06/17
 * Time: 13.27
 */

namespace MessageExchangeEventManager;

use Zend\EventManager\EventManager;
use Zend\EventManager\EventManagerInterface;

trait EventManagerAwareTrait
{

    /**
     * @var EventManagerInterface
     */
    protected $eventManager;

    /**
     * Retrieve the event manager
     *
     * Lazy-loads an EventManager instance if none registered.
     *
     * @return EventManagerInterface
     */
    public function getEventManager()
    {

        if (!$this->eventManager) {
            $this->setEventManager(new EventManager());
        }
        return $this->eventManager;
    }

    /**
     * Inject an EventManager instance
     *
     * @param  EventManagerInterface $eventManager
     *
     * @return void
     */
    public function setEventManager(EventManagerInterface $eventManager)
    {

        $eventManager->setIdentifiers([
                                          __CLASS__,
                                          get_called_class(),
                                          microtime(),
                                      ]);
        $this->eventManager = $eventManager;
    }

}