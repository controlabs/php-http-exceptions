<?php

namespace Controlabs\Http\Exception;

/**
 * Request Timeout exception class.
 */
class RequestTimeout extends AbstractClientErrorException
{
    protected $message = 'Request Timeout';
    protected $statusCode = 408;
}
