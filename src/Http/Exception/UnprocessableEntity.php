<?php

namespace Controlabs\Http\Exception;

/**
 * Unprocessable Entity exception class.
 */
class UnprocessableEntity extends AbstractClientErrorException
{
    protected $message = 'Unprocessable Entity';
    protected $statusCode = 422;
}
