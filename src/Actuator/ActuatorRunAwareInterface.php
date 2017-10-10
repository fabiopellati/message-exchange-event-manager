<?php

namespace MessageExchangeEventManager\Actuator;

interface ActuatorRunAwareInterface
{
    const EVENT_ACTUATOR_PRE_RUN='actuator.run.pre';
    const EVENT_ACTUATOR_RUN='actuator.run';
    const EVENT_ACTUATOR_POST_RUN='actuator.run.post';

    public function run();

}
