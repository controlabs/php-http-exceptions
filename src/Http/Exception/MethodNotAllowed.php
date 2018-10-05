<?php

namespace Controlabs\Http\Exception;

/**
 * Method Not Allowed exception class.
 */
class MethodNotAllowed extends AbstractClientErrorException
{
    protected $message = 'Method Not Allowed';
    protected $statusCode = 405;
}
