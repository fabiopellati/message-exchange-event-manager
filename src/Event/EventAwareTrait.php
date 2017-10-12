<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
 */
namespace MessageExchangeEventManager\Event;


use MessageExchangeEventManager\Request\Request;
use MessageExchangeEventManager\Response\Response;

trait EventAwareTrait
{
    /**
     * @var Event
     */
    protected $event;


    /**
     * @return \MessageExchangeEventManager\Event\Event
     */
    public function getEvent()
    {
        if(is_null($this->event)){
            $this->setEvent(new Event());
        }
        return $this->event;
    }

    /**
     * @param \MessageExchangeEventManager\Event\Event $event
     */
    public function setEvent($event)
    {
        $event->setTarget($this);
        $request=new  Request();
        $response= new Response();
        $event->setResponse($response);
        $event->setRequest($request);
        $this->event = $event;
    }

}