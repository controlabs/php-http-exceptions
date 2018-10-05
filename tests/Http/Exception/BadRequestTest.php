<?php

declare(strict_types=1);

namespace Controlabs\Tests\Http\Exception;

use Controlabs\Http\Exception\BadRequest;

class BadRequestTest extends \Controlabs\Tests\AbstractTestCase
{
    public function testShouldThrowBadRequestException()
    {
        $this->expectException(BadRequest::class);
        $this->expectExceptionMessage("I'm gonna make him an offer he can't refuse");
        throw new BadRequest("I'm gonna make him an offer he can't refuse");
    }

    public function testData()
    {
        $data = [
            'name' => 'Vito Andolini Corleone',
            'gender' => 'male',
            'Affiliation' => 'Corleone family',
        ];

        $badRequest = new BadRequest('Revenge is a dish best served cold.', $data);
        $this->assertSame($data, $badRequest->data());
    }

    public function testHeaders()
    {
        $headers = [
            'X-Token' => '37005936-f12e-4a18-a16f-e3567c3bd7b6',
            'X-Secret' => 'qwerty',
        ];

        $badRequest = new BadRequest('', [], null, $headers);
        $this->assertSame($headers, $badRequest->headers());
    }

    public function testResponse()
    {
        $data = [
            'name' => 'Vito Andolini Corleone',
            'gender' => 'male',
            'Affiliation' => 'Corleone family',
        ];

        $badRequest = new BadRequest('Revenge is a dish best served cold.', $data);
        $response = $badRequest->response();
        $this->assertInstanceOf(\Controlabs\Http\ResponseMessage::class, $response);
    }
}
