<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 19/06/17
 * Time: 11.59
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