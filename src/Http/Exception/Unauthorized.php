<?php

namespace Controlabs\Http\Exception;

/**
 * Unauthorized exception class.
 */
class Unauthorized extends AbstractClientErrorException
{
    protected $message = 'Unauthorized';
    protected $statusCode = 401;
}
