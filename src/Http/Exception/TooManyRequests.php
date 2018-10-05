<?php

namespace Controlabs\Http\Exception;

/**
 * Too Many Requests exception class.
 */
class TooManyRequests extends AbstractClientErrorException
{
    protected $message = 'Too Many Requests';
    protected $statusCode = 429;
}
