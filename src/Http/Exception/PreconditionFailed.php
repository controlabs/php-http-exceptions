<?php

namespace Controlabs\Http\Exception;

/**
 * Precondition Failed exception class.
 */
class PreconditionFailed extends AbstractClientErrorException
{
    protected $message = 'Precondition Failed';
    protected $statusCode = 412;
}
