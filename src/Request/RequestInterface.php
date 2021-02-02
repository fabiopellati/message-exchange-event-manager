<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
 */
namespace MessageExchangeEventManager\Request;

use Laminas\Hydrator\HydratorInterface;
use Laminas\Stdlib\Parameters;

interface RequestInterface
{

    /**
     * @return \Laminas\Stdlib\Parameters
     */
    public function getParameters();

    /**
     * @param \Laminas\Stdlib\Parameters $parameters
     *
     * @return mixed
     */
    public function setParameters(Parameters $parameters);


}
