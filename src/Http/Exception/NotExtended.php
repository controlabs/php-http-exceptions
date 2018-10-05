<?php

namespace Controlabs\Http\Exception;

/**
 * Not Extended exception class.
 */
class NotExtended extends AbstractServerErrorException
{
    protected $message = 'Not Extended';
    protected $statusCode = 510;
}
