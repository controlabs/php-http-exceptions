<?php

namespace Controlabs\Http\Exception;

/**
 * Gone exception class.
 */
class Gone extends AbstractClientErrorException
{
    protected $message = 'Gone';
    protected $statusCode = 410;
}
