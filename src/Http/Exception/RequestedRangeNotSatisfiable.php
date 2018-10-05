<?php

namespace Controlabs\Http\Exception;

/**
 * Requested Range Not Satisfiable exception class.
 */
class RequestedRangeNotSatisfiable extends AbstractClientErrorException
{
    protected $message = 'Requested Range Not Satisfiable';
    protected $statusCode = 416;
}
