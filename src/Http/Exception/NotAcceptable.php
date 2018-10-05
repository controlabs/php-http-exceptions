<?php

namespace Controlabs\Http\Exception;

/**
 * Not Acceptable exception class.
 */
class NotAcceptable extends AbstractClientErrorException
{
    protected $message = 'Not Acceptable';
    protected $statusCode = 406;
}
