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
    const EVENT_ACTUATOR_PRE_RUN='actuator.run.pre';
    const EVENT_ACTUATOR_RUN='actuator.run';
    const EVENT_ACTUATOR_POST_RUN='actuator.run.post';

    public function run($options);

}
