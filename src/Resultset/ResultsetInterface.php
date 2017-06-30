<?php
/**
 * Created by PhpStorm.
 * User: fabio
 * Date: 28/04/17
 * Time: 14.29
 */

namespace MessageExchangeEventManager\Resultset;

interface ResultsetInterface extends
    \Countable,
    \IteratorAggregate

{

    /**
     * @param $data mixed
     */
    public function initialize($data);

    /**
     * @return mixed
     */
    public function fetchAll();


}