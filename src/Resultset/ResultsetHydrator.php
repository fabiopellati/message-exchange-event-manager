<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 28/04/17
 * Time: 15.17
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