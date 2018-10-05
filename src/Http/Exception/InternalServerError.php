<?php

namespace Controlabs\Http\Exception;

/**
 * Internal Server Error exception class.
 */
class InternalServerError extends AbstractServerErrorException
{
    protected $message = 'Internal Server Error';
    protected $statusCode = 500;
}
