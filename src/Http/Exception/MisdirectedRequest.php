<?php

namespace Controlabs\Http\Exception;

/**
 * Misdirected Request exception class.
 */
class MisdirectedRequest extends AbstractClientErrorException
{
    protected $message = 'Misdirected Request';
    protected $statusCode = 421;
}
