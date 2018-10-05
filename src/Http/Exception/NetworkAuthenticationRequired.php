<?php

namespace Controlabs\Http\Exception;

/**
 * Network Authentication Required exception class.
 */
class NetworkAuthenticationRequired extends AbstractServerErrorException
{
    protected $message = 'Network Authentication Required';
    protected $statusCode = 511;
}
