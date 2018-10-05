<?php

namespace Controlabs\Http\Exception;

/**
 * Variant Also Negotiates exception class.
 */
class VariantAlsoNegotiates extends AbstractServerErrorException
{
    protected $message = 'Variant Also Negotiates';
    protected $statusCode = 506;
}
