<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 28/04/17
 * Time: 9.58
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