<?php

namespace Controlabs\Http\Exception;

/**
 * Proxy Authentication Required exception class.
 */
class ProxyAuthenticationRequired extends AbstractClientErrorException
{
    protected $message = 'Proxy Authentication Required';
    protected $statusCode = 407;
}
