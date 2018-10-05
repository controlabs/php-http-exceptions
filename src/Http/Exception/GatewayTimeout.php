<?php

namespace Controlabs\Http\Exception;

/**
 * Gateway Timeout exception class.
 */
class GatewayTimeout extends AbstractServerErrorException
{
    protected $message = 'Gateway Timeout';
    protected $statusCode = 504;
}
