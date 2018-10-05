<?php

namespace Controlabs\Http\Exception;

/**
 * I'm a teapot exception class.
 */
class ImATeapot extends AbstractClientErrorException
{
    protected $message = "I'm a teapot";
    protected $statusCode = 418;
}
