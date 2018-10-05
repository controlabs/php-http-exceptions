<?php

namespace Controlabs\Http\Exception;

/**
 * Locked exception class.
 */
class Locked extends AbstractClientErrorException
{
    protected $message = 'Locked';
    protected $statusCode = 423;
}
