<?php

namespace Controlabs\Http\Exception;

/**
 * Loop Detected exception class.
 */
class LoopDetected extends AbstractServerErrorException
{
    protected $message = 'Loop Detected';
    protected $statusCode = 508;
}
