<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
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