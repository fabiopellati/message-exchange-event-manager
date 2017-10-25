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
use MessageExchangeEventManager\Request\RequestInterface;
use MessageExchangeEventManager\Response\Response;
use MessageExchangeEventManager\Response\ResponseInterface;

class Event extends \Zend\EventManager\Event
    implements EventInterface
{

    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * @var ResponseInterface
     */
    protected $response;



    /**
     * @return RequestInterface
     */
    public function getRequest()
    {
        if(is_null($this->request)){
            $this->setRequest(new Request());
        }
        return $this->request;
    }

    /**
     * @param $request RequestInterface
     *
     * @return mixed
     */
    public function setRequest(RequestInterface $request)
    {

        $this->request=$request;
    }



    /**
     * @return ResponseInterface
     *
     */
    public function getResponse()
    {
        if(is_null($this->response)){
            $this->setResponse(new Response());
        }
        return $this->response;
    }

    /**
     *
     * @param ResponseInterface $response
     *
     * @return mixed
     */
    public function setResponse(ResponseInterface $response)
    {
        $this->response=$response;
    }

}