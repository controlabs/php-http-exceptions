<?php

namespace Controlabs\Http\Exception;

/**
 * Forbidden exception class.
 */
class Forbidden extends AbstractClientErrorException
{
    protected $message = 'Forbidden';
    protected $statusCode = 403;
}
