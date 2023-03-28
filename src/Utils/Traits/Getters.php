<?php

namespace Shadow\Utils\Traits;

trait Getters
{
    public function __call(string $name, $args)
    {
        $keyName = str_replace('get', '', $name);
        $keyName = lcfirst($keyName);
        if (property_exists($this, $keyName)) {
            return $this->$keyName;
        }
        return null;
    }
}
