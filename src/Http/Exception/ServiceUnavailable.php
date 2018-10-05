<?php

namespace Controlabs\Http\Exception;

/**
 * Service Unavailable exception class.
 */
class ServiceUnavailable extends AbstractServerErrorException
{
    protected $message = 'Service Unavailable';
    protected $statusCode = 503;
}
