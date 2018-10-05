<?php

namespace Controlabs\Http\Exception;

/**
 * Abstract Client Error Exception
 */
abstract class AbstractClientErrorException extends AbstractHttpException
{
    protected $message = 'Client Error 4xx';
    protected $statusCode = 4;
}
