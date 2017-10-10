<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 10/10/17
 * Time: 10.09
 */

namespace MessageExchangeEventManager\Actuator;
use MessageExchangeEventManager\Event\EventAwareTrait;
use MessageExchangeEventManager\EventManagerAwareTrait;
use MessageExchangeEventManager\EventRunAwareTrait;

final class Actuator
implements ActuatorRunAwareInterface
{

    use EventManagerAwareTrait, EventRunAwareTrait, EventAwareTrait;


    /**
     *
     *
     * @return array|object Updated resource.
     */
    public function run($options)
    {
        $this->getEvent()->getRequest()->getParameters()->set('actuatorRunOptions',$options);
        $response = $this->runEvent($this->getEvent(), self::EVENT_ACTUATOR_PRE_RUN,
            self::EVENT_ACTUATOR_RUN, self::EVENT_ACTUATOR_POST_RUN);

        return $response->getContent();
    }

}