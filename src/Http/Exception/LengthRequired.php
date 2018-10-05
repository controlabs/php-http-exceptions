<?php

namespace Controlabs\Http\Exception;

/**
 * Length Required exception class.
 */
class LengthRequired extends AbstractClientErrorException
{
    protected $message = 'Length Required';
    protected $statusCode = 411;
}
