<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
 */
namespace MessageExchangeEventManager\Request;

use MessageExchangeEventManager\Exception\RuntimeException;
use Zend\Stdlib\Parameters;

class Request extends \Zend\Stdlib\Request implements RequestInterface
{

    /**
     * @var Parameters
     */
    protected $parameters;


    /**
     * @return \Zend\Stdlib\Parameters
     */
    public function getParameters()
    {
        if (!$this->parameters) {
            $this->setParameters(new Parameters());
        }
        return $this->parameters;
    }

    /**
     * @param \Zend\Stdlib\Parameters $parameters
     *
     * @return mixed|void
     */
    public function setParameters(Parameters $parameters)
    {
        $this->parameters = $parameters;
    }

    /**
     * @throws \MessageExchangeEventManager\Exception\RuntimeException
     */
    public function toString()
    {
        throw new RuntimeException('method not implemented');
    }
}