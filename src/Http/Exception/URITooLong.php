<?php

namespace Controlabs\Http\Exception;

/**
 * URI Too Long exception class.
 */
class URITooLong extends AbstractClientErrorException
{
    protected $message = 'URI Too Long';
    protected $statusCode = 414;
}
