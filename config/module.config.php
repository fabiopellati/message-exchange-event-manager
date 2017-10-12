<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
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
