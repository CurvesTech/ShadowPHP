<?php

namespace Shadow\Http;

class Response
{
    private array $headers;
    private string $body;

    public function __construct(?array $headers = [], ?string $body = '')
    {
        $this->headers = $headers;
        $this->body = $body;
    }

    public function send(): void
    {
        foreach ($this->headers as $header) {
            header($header);
        }

        echo $this->body;
    }
}
