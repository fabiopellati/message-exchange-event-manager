<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return [
    'service_manager' => [
        'factories' => [
            'MessageExchangeEventManager\\Event\\Event' => \Zend\ServiceManager\Factory\InvokableFactory::class,
            'MessageExchangeEventManager\\Resultset\\Resultset' => \Zend\ServiceManager\Factory\InvokableFactory::class,
            'MessageExchangeEventManager\\Resultset\\ResultsetHydrator' => \Zend\ServiceManager\Factory\InvokableFactory::class,
            'MessageExchangeEventManager\\Request\\Request' => \Zend\ServiceManager\Factory\InvokableFactory::class,
            'MessageExchangeEventManager\\Response\\Response' => \Zend\ServiceManager\Factory\InvokableFactory::class,
        ]
    ],

];
