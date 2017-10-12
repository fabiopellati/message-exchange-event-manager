<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
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