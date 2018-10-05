<?php

namespace Controlabs\Http\Exception;

/**
 * Insufficient Storage exception class.
 */
class InsufficientStorage extends AbstractServerErrorException
{
    protected $message = 'Insufficient Storage';
    protected $statusCode = 507;
}
