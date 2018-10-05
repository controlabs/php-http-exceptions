<?php

namespace Controlabs\Http\Exception;

use Controlabs\Http\ResponseMessage;

/**
 * Abstract HTTP exception class.
 */
abstract class AbstractHttpException extends \Exception implements HttpExceptionInterface
{
    /**
     * @var array
     */
    protected $data = [];

    /**
     * @var array
     */
    protected $headers = [];

    /**
     * @var string
     */
    protected $message = 'Internal Server Error';

    /**
     * @var integer
     */
    protected $statusCode = 500;

    /**
     * Constructor
     *
     * @param string        $message
     * @param array         $data
     * @param \Throwable    $previous
     * @param array         $headers
     */
    public function __construct(
        string $message = '',
        array $data = [],
        \Throwable $previous = null,
        array $headers = []
    ) {
        ($message) && $this->message = $message;
        parent::__construct($this->message, 0, $previous);
        $this->data = $data;
        $this->headers = $headers;
    }

    /**
     * {@inheritdoc}
     */
    public function statusCode() : int
    {
        return $this->statusCode;
    }

    /**
     * {@inheritdoc}
     */
    public function data() : array
    {
        return $this->data;
    }

    /**
     * {@inheritdoc}
     */
    public function headers() : array
    {
        return $this->headers;
    }

    /**
     * {@inheritdoc}
     */
    public function message() : ?string
    {
        return $this->getMessage();
    }

    /**
     * {@inheritdoc}
     */
    public function response() : ResponseMessage
    {
        return new ResponseMessage($this->statusCode(), $this->message(), $this->data());
    }
}
