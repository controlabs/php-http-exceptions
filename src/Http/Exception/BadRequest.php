<?php

namespace Controlabs\Http\Exception;

/**
 * Bad Request exception class.
 */
class BadRequest extends AbstractClientErrorException
{
    protected $message = 'Bad Request';
    protected $statusCode = 400;
}
