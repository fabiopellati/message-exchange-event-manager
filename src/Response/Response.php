<?php


namespace MessageExchangeEventManager\Response;

use MessageExchangeEventManager\Exception\RuntimeException;

class Response extends \Zend\Stdlib\Response implements ResponseInterface
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