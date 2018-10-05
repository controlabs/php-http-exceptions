<?php

namespace Controlabs\Http\Exception;

/**
 * Unavailable For Legal Reasons exception class.
 */
class UnavailableForLegalReasons extends AbstractClientErrorException
{
    protected $message = 'Unavailable For Legal Reasons';
    protected $statusCode = 451;
}
