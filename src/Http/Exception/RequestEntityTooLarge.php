<?php

namespace Controlabs\Http\Exception;

/**
 * Request Entity Too Large exception class.
 */
class RequestEntityTooLarge extends AbstractClientErrorException
{
    protected $message = 'Request Entity Too Large';
    protected $statusCode = 413;
}
