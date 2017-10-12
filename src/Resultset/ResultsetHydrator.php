<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
 */
namespace MessageExchangeEventManager\Resultset;

use Zend\Hydrator\HydratorInterface;

class ResultsetHydrator implements HydratorInterface
{

    /**
     * Extract values from an object
     *
     * @param  \MessageExchangeEventManager\Resultset\ResultsetInterface $object
     *
     * @return array
     */
    public function extract($object)
    {
        return $object->fetchAll();
    }

    /**
     * Hydrate $object with the provided $data.
     *
     * @param  array                                   $data
     * @param  \MessageExchangeEventManager\Resultset\ResultsetInterface $object
     *
     * @return object
     */
    public function hydrate(array $data, $object)
    {
        $object->initialize($data);
        return $object;
    }
}