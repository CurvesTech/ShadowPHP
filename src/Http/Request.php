<?php

namespace Shadow\Http;

class Request
{
    private array $headers;
    private array $body;
    private string $method;

    public function __construct(array $headers, array $inputs, string $method)
    {
        $this->headers = $headers;
        $this->body = $inputs;
        $this->method = $method;
    }
}
