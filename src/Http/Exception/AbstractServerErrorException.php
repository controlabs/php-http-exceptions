<?php

namespace Controlabs\Http\Exception;

/**
 * Abstract Server Error Exception
 */
abstract class AbstractServerErrorException extends AbstractHttpException
{
    protected $message = 'Server Error 5xx';
    protected $statusCode = 5;
}
