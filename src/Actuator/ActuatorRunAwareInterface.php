<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
 */

namespace MessageExchangeEventManager\Actuator;
interface ActuatorRunAwareInterface
{
    const EVENT_ACTUATOR_INIT = 'EVENT_ACTUATOR_INIT';

    const EVENT_ACTUATOR_RUN_PRE = 'EVENT_ACTUATOR_RUN_PRE';
    const EVENT_ACTUATOR_RUN = 'EVENT_ACTUATOR_RUN';
    const EVENT_ACTUATOR_RUN_POST = 'EVENT_ACTUATOR_RUN_POST';


    public function run($options);

}
