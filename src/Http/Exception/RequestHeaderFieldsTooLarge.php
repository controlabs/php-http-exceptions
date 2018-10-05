<?php

namespace Controlabs\Http\Exception;

/**
 * Request Header Fields Too Large exception class.
 */
class RequestHeaderFieldsTooLarge extends AbstractClientErrorException
{
    protected $message = 'Request Header Fields Too Large';
    protected $statusCode = 431;
}
