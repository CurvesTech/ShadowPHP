<?php

namespace Shadow\Utils;

trait Setters
{
    public function __call(string $name, $arguments): void
    {
        $keyName = str_replace('set', '', $name);
        $keyName = lcfirst($keyName);
        if (property_exists($this, $keyName)) {
            $this->$keyName = $arguments[0];
        }
    }
}
