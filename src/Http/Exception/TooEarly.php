<?php

namespace Controlabs\Http\Exception;

/**
 * Too Early exception class.
 */
class TooEarly extends AbstractClientErrorException
{
    protected $message = 'Too Early';
    protected $statusCode = 425;
}
