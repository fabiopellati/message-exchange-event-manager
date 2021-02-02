<?php
/**
 *
 * @link      https://github.com/fabiopellati/message-exchange-event-manager
 * @copyright Copyright (c) 2017-2017 Fabio Pellati (https://github.com/fabiopellati)
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 *
 */

namespace MessageExchangeEventManager\Response;

use MessageExchangeEventManager\Exception\RuntimeException;

class Response
    extends \Laminas\Stdlib\Response
    implements ResponseInterface
{
    /**
     * @var int
     */
    protected $statusCode;

    /**
     * @var mixed
     */
    protected $content;


    /**
     * @return int
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param int $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @throws \MessageExchangeEventManager\Exception\RuntimeException
     */
    public function toString()
    {
        throw new RuntimeException('method not implemented');
    }


}
