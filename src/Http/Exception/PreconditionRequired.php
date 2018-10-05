<?php

namespace Controlabs\Http\Exception;

/**
 * Precondition Required exception class.
 */
class PreconditionRequired extends AbstractClientErrorException
{
    protected $message = 'Precondition Required';
    protected $statusCode = 428;
}
