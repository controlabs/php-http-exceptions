<?php

declare(strict_types=1);

namespace Controlabs\Tests\Http;

use Controlabs\Http\ResponseMessage;

class ResponseMessageTest extends \Controlabs\Tests\AbstractTestCase
{
    public function testToArray()
    {
        $errors = [
            'name' => 'Invalid name',
            'age' => 'Invalid age',
        ];
        $response = (new ResponseMessage(400, 'Bad Request', $errors))->toArray();
        $expected = [
            'error' => [
                'code' => 400,
                'message' => 'Bad Request',
                'errors' => $errors,
            ]
        ];
        $this->assertSame($expected, $response);
    }

    public function testToJson()
    {
        $errors = [
            'name' => 'Invalid name',
            'age' => 'Invalid age',
        ];
        $response = (new ResponseMessage(400, 'Bad Request', $errors))->toJson();
        $expected = '{"error":{"code":400,"message":"Bad Request","errors":{"name":"Invalid name","age":"Invalid age"}}}';
        $this->assertEquals($expected, $response);
    }
}
