<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 28/04/17
 * Time: 14.30
 */

namespace MessageExchangeEventManager\Resultset;

use MessageExchangeEventManager\IteratorAggregateAwareTrait;

class Resultset implements ResultsetInterface
{

    /**
     *
     */
    protected $storage;

    /**
     * @var \Iterator
     */
    protected $iteratorClass;

    /**
     * Resultset constructor.
     *
     * @param string $iteratorClass
     *
     */
    public function __construct($iteratorClass = 'ArrayIterator')
    {
        $this->iteratorClass = $iteratorClass;
    }

    /**
     * @return \Iterator
     */
    public function getIterator()
    {
        $class = $this->iteratorClass;

        return new $class($this->storage);
    }

    /**
     * Sets the iterator classname for the ArrayObject
     *
     * @param  string $class
     *
     * @return void
     */
    public function setIteratorClass($class)
    {
        if (class_exists($class)) {
            $this->iteratorClass = $class;

            return;
        }

        if (strpos($class, '\\') === 0) {
            $class = '\\' . $class;
            if (class_exists($class)) {
                $this->iteratorClass = $class;

                return;
            }
        }

        throw new InvalidArgumentException('The iterator class does not exist');
    }

    /**
     * @param $data mixed
     *
     */
    public function initialize($data)
    {
        $this->storage = $data;
    }


    /**
     * @return int
     */
    public function count()
    {
        $count = count($this->storage);
        return $count;
    }

    /**
     * @return mixed
     */
    public function fetchAll()
    {
        return $this->storage;
    }
}