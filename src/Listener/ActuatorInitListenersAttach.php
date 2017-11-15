<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
 */

namespace MessageExchangeEventManager\Listener;

use MessageExchangeEventManager\Actuator\Actuator;
use MessageExchangeEventManager\Event\Event;
use MessageExchangeEventManager\EventManagerAwareTrait;
use Psr\Container\ContainerInterface;
use Zend\EventManager\AbstractListenerAggregate;
use Zend\EventManager\EventManagerInterface;
use Zend\Stdlib\ArrayUtils;

final class ActuatorInitListenersAttach
    extends AbstractListenerAggregate
{

    use EventManagerAwareTrait;

    /**
     * @var \Psr\Container\ContainerInterface
     */
    protected $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     *
     * @param EventManagerInterface $events
     * @param int                   $priority
     *
     * @return void
     */
    public function attach(EventManagerInterface $events, $priority = 1000)
    {

        $this->listeners[] = $events->attach(
            Actuator::EVENT_ACTUATOR_INIT, [$this, 'onEvent'], $priority);
        $this->setEventManager($events);
    }

    /**
     * load and attach a listeners set
     * need defining a parameters with list of
     *
     * @param \MessageExchangeEventManager\Event\Event $e
     *
     * @return \MessageExchangeEventManager\Response\ResponseInterface
     */
    public function onEvent(Event $e)
    {

        $request = $e->getRequest();
        $response = $e->getResponse();
        try {
            $actuatorListeners = $request->getParameters()->get('actuatorListeners');
            /**
             * load listeners
             */
            foreach ($actuatorListeners as $listenerClass) {
                $listener = $this->container->get($listenerClass);
                if (method_exists($listener, 'setEventManager')) {
                    $listener->setEventManager($this->getEventManager());
                }
                $listener->attach($this->getEventManager());

            }

        } catch (\Exception $error) {
            $response->setContent($error);
            $e->stopPropagation();
        }

        return $response;
    }

}
