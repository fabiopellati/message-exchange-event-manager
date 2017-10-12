<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
 */
namespace MessageExchangeEventManager\Request;

use Zend\Hydrator\HydratorInterface;
use Zend\Stdlib\Parameters;

interface RequestInterface
{


    /**
     * @return \Zend\Stdlib\Parameters
     */
    public function getParameters();

    /**
     * @param \Zend\Stdlib\Parameters $parameters
     *
     * @return mixed
     */
    public function setParameters(Parameters $parameters);


}