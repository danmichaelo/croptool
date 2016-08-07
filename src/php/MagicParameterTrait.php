<?php

namespace CropTool;

trait MagicParameterTrait
{

    public function __get($key)
    {
        $method = 'get' . ucfirst($key) . 'Parameter';
        if (method_exists($this, $method)) {
            return $this->$method();
        }
    }
}
