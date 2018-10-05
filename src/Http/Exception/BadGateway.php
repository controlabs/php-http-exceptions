<?php

declare(strict_types=1);

namespace Controlabs\Http\Exception;

/**
 * Bad Gateway exception class.
 */
class BadGateway extends AbstractServerErrorException
{
    protected $message = 'Bad Gateway';
    protected $statusCode = 502;
}
