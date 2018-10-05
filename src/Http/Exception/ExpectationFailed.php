<?php

namespace Controlabs\Http\Exception;

/**
 * Expectation Failed exception class.
 */
class ExpectationFailed extends AbstractClientErrorException
{
    protected $message = 'Expectation Failed';
    protected $statusCode = 417;
}
