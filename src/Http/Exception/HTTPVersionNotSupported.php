<?php

namespace Controlabs\Http\Exception;

/**
 * HTTP Version Not Supported exception class.
 */
class HTTPVersionNotSupported extends AbstractServerErrorException
{
    protected $message = 'HTTP Version Not Supported';
    protected $statusCode = 505;
}
