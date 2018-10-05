<?php

namespace Controlabs\Http\Exception;

/**
 * Failed Dependency exception class.
 */
class FailedDependency extends AbstractClientErrorException
{
    protected $message = 'Failed Dependency';
    protected $statusCode = 424;
}
