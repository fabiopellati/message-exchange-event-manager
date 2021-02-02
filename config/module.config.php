<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
 */

use Laminas\ServiceManager\Factory\InvokableFactory;

return [
    'service_manager' => [
        'factories' => [
            'MessageExchangeEventManager\\Event\\Event'                 => InvokableFactory::class,
            'MessageExchangeEventManager\\Resultset\\Resultset'         => InvokableFactory::class,
            'MessageExchangeEventManager\\Resultset\\ResultsetHydrator' => InvokableFactory::class,
            'MessageExchangeEventManager\\Request\\Request'             => InvokableFactory::class,
            'MessageExchangeEventManager\\Response\\Response'           => InvokableFactory::class,
        ],
    ],

];
