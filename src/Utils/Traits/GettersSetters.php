<?php

namespace Shadow\Utils;

trait GettersSetters
{
    public function __call(string $name, $args)
    {
        if (substr($name, 0, 3) == 'get') {
            // getter
            $keyName = str_replace('get', '', $name);
            $keyName = lcfirst($keyName);
            if (property_exists($this, $keyName)) {
                return $this->$keyName;
            }
            return null;
        } elseif (substr($name, 0, 3) == 'set') {
            // setter
            $keyName = str_replace('set', '', $name);
            $keyName = lcfirst($keyName);
            if (property_exists($this, $keyName)) {
                $this->$keyName = $args[0];
            }
        }
    }
}
