<?php

namespace Controlabs\Http\Exception;

/**
 * Not Found exception class.
 */
class NotFound extends AbstractClientErrorException
{
    protected $message = 'Not Found';
    protected $statusCode = 404;
}
