<?php

namespace Shadow\Http;

use Shadow\Http\Header;
use Shadow\Utils\Traits\GettersSetters;

class Request
{
    use GettersSetters;

    private array $headers;
    private array $body;
    private string $method;

    public function __construct(array $headers, array $inputs, string $method)
    {
        $this->headers = array_map(function ($headerKey, $headerVal) {
            $header = new Header($headerKey, $headerVal);
            return $header;
        }, array_keys($headers), $headers);
        $this->body = $inputs;
        $this->method = $method;
    }
}
