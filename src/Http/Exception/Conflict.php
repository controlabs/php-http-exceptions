<?php

namespace Controlabs\Http\Exception;

/**
 * Conflict exception class.
 */
class Conflict extends AbstractClientErrorException
{
    protected $message = 'Conflict';
    protected $statusCode = 409;
}
