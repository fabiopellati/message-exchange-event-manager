<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 28/04/17
 * Time: 12.24
 */

namespace MessageExchangeEventManager\Event;

use MessageExchangeEventManager\Request\RequestInterface;
use MessageExchangeEventManager\Response\ResponseInterface;

interface EventInterface extends \Zend\EventManager\EventInterface
{

    /**
     * @return \MessageExchangeEventManager\Request\RequestInterface
     */
    public function getRequest();

    /**
     * @param $request \MessageExchangeEventManager\Request\RequestInterface
     *
     * @return mixed
     */
    public function setRequest(RequestInterface $request);


    /**
     * @return \MessageExchangeEventManager\Response\Response
     *
     */
    public function getResponse();

    /**
     *
     * @param \MessageExchangeEventManager\Response\ResponseInterface $response
     *
     * @return mixed
     */
    public function setResponse(ResponseInterface $response);

}