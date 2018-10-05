<?php

namespace Controlabs\Http\Exception;

use Controlabs\Http\ResponseMessage;

interface HttpExceptionInterface extends \Throwable
{
    /**
     * Returns the http status code.
     *
     * @return int
     */
    public function statusCode() : int;

    /**
     * @return array
     */
    public function data() : array;

    /**
     * Returns response headers.
     *
     * @return array
     */
    public function headers() : array;

    /**
     * Returns the error message.
     *
     * @return string
     */
    public function message() : ?string;

    /**
     * Returns the response message.
     *
     * @return ResponseMessage
     */
    public function response() : ResponseMessage;
}
