<?php

namespace Controlabs\Http\Exception;

/**
 * Unsupported Media Type exception class.
 */
class UnsupportedMediaType extends AbstractClientErrorException
{
    protected $message = 'Unsupported Media Type';
    protected $statusCode = 415;
}
