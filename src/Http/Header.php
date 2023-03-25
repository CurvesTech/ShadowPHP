<?php

namespace Shadow\Http;

use Shadow\Utils\GettersSetters;

class Header
{
    use GettersSetters;

    private string $key;
    private string $value;

    public function __construct(string $key, string $value)
    {
        $this->key = $key;
        $this->value = $value;
    }
}
