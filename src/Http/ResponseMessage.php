<?php

namespace Controlabs\Http;

class ResponseMessage
{
    private $code;
    private $message;
    private $data = [];

    public function __construct(int $code, ?string $message, array $data = [])
    {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }

    public function toArray()
    {
        $error = [];
        $error['error'] = [
            'code' => $this->code,
            'message' => $this->message,
        ];
        ($this->data) && $error['errors'] = $this->data;
        return $error;
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }
}
