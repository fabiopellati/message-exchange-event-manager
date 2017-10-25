<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
 */
namespace MessageExchangeEventManager\Event;

use MessageExchangeEventManager\Request\RequestInterface;
use MessageExchangeEventManager\Response\ResponseInterface;

/**
 * Interface EventInterface
 *
 * @package MessageExchangeEventManager\Event
 */
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