<?php

namespace Controlabs\Http\Exception;

/**
 * Not Implemented exception class.
 */
class NotImplemented extends AbstractServerErrorException
{
    protected $message = 'Not Implemented';
    protected $statusCode = 501;
}
