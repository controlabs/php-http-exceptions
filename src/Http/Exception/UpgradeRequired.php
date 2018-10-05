<?php

namespace Controlabs\Http\Exception;

/**
 * Upgrade Required exception class.
 */
class UpgradeRequired extends AbstractClientErrorException
{
    protected $message = 'Upgrade Required';
    protected $statusCode = 426;
}
