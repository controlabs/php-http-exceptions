<?php

declare(strict_types=1);

namespace Controlabs\Tests\Http\Exception;

class HttpExceptionsTest extends \Controlabs\Tests\AbstractTestCase
{
    protected $clientErrorResponses = [
        400 => ['Bad Request', \Controlabs\Http\Exception\BadRequest::class],
        401 => ['Unauthorized', \Controlabs\Http\Exception\Unauthorized::class],
        // 402 => ['Payment Required', \Controlabs\Http\Exception\PaymentRequired::class],
        403 => ['Forbidden', \Controlabs\Http\Exception\Forbidden::class],
        404 => ['Not Found', \Controlabs\Http\Exception\NotFound::class],
        405 => ['Method Not Allowed', \Controlabs\Http\Exception\MethodNotAllowed::class],
        406 => ['Not Acceptable', \Controlabs\Http\Exception\NotAcceptable::class],
        407 => ['Proxy Authentication Required', \Controlabs\Http\Exception\ProxyAuthenticationRequired::class],
        408 => ['Request Timeout', \Controlabs\Http\Exception\RequestTimeout::class],
        409 => ['Conflict', \Controlabs\Http\Exception\Conflict::class],
        410 => ['Gone', \Controlabs\Http\Exception\Gone::class],
        411 => ['Length Required', \Controlabs\Http\Exception\LengthRequired::class],
        412 => ['Precondition Failed', \Controlabs\Http\Exception\PreconditionFailed::class],
        413 => ['Request Entity Too Large', \Controlabs\Http\Exception\RequestEntityTooLarge::class],
        414 => ['URI Too Long', \Controlabs\Http\Exception\URITooLong::class],
        415 => ['Unsupported Media Type', \Controlabs\Http\Exception\UnsupportedMediaType::class],
        416 => ['Requested Range Not Satisfiable', \Controlabs\Http\Exception\RequestedRangeNotSatisfiable::class],
        417 => ['Expectation Failed', \Controlabs\Http\Exception\ExpectationFailed::class],
        418 => ["I'm a teapot", \Controlabs\Http\Exception\ImATeapot::class],
        421 => ['Misdirected Request', \Controlabs\Http\Exception\MisdirectedRequest::class],
        422 => ['Unprocessable Entity', \Controlabs\Http\Exception\UnprocessableEntity::class],
        423 => ['Locked', \Controlabs\Http\Exception\Locked::class],
        424 => ['Failed Dependency', \Controlabs\Http\Exception\FailedDependency::class],
        425 => ['Too Early', \Controlabs\Http\Exception\TooEarly::class],
        426 => ['Upgrade Required', \Controlabs\Http\Exception\UpgradeRequired::class],
        428 => ['Precondition Required', \Controlabs\Http\Exception\PreconditionRequired::class],
        429 => ['Too Many Requests', \Controlabs\Http\Exception\TooManyRequests::class],
        431 => ['Request Header Fields Too Large', \Controlabs\Http\Exception\RequestHeaderFieldsTooLarge::class],
        451 => ['Unavailable For Legal Reasons', \Controlabs\Http\Exception\UnavailableForLegalReasons::class],
    ];

    protected $serverErrorResponses = [
        500 => ['Internal Server Error', \Controlabs\Http\Exception\InternalServerError::class],
        501 => ['Not Implemented', \Controlabs\Http\Exception\NotImplemented::class],
        502 => ['Bad Gateway', \Controlabs\Http\Exception\BadGateway::class],
        503 => ['Service Unavailable', \Controlabs\Http\Exception\ServiceUnavailable::class],
        504 => ['Gateway Timeout', \Controlabs\Http\Exception\GatewayTimeout::class],
        505 => ['HTTP Version Not Supported', \Controlabs\Http\Exception\HTTPVersionNotSupported::class],
        506 => ['Variant Also Negotiates', \Controlabs\Http\Exception\VariantAlsoNegotiates::class],
        507 => ['Insufficient Storage', \Controlabs\Http\Exception\InsufficientStorage::class],
        508 => ['Loop Detected', \Controlabs\Http\Exception\LoopDetected::class],
        510 => ['Not Extended', \Controlabs\Http\Exception\NotExtended::class],
        511 => ['Network Authentication Required', \Controlabs\Http\Exception\NetworkAuthenticationRequired::class],
    ];

    public function testClientErrorResponses()
    {
        foreach ($this->clientErrorResponses as $code => $value) {
            $ex = $value[1];
            $message = $value[0];
            $obj = new $ex();
            $this->assertSame($code, $obj->statusCode());
            $this->assertSame($message, $obj->message());
            $this->assertInstanceOf(\Controlabs\Http\Exception\AbstractClientErrorException::class, $obj);
            $this->assertInstanceOf(\Controlabs\Http\Exception\AbstractHttpException::class, $obj);
            $this->assertInstanceOf(\Controlabs\Http\Exception\HttpExceptionInterface::class, $obj);
        }
    }

    public function testServerErrorResponses()
    {
        foreach ($this->serverErrorResponses as $code => $value) {
            $message = $value[0];
            $ex = $value[1];
            $obj = new $ex();
            $this->assertSame($code, $obj->statusCode());
            $this->assertSame($message, $obj->message());
            $this->assertInstanceOf(\Controlabs\Http\Exception\AbstractServerErrorException::class, $obj);
            $this->assertInstanceOf(\Controlabs\Http\Exception\AbstractHttpException::class, $obj);
            $this->assertInstanceOf(\Controlabs\Http\Exception\HttpExceptionInterface::class, $obj);
        }
    }
}
