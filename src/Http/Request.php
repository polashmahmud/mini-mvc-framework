<?php

namespace Polash\Minilara\Http;

class Request
{
    public function method()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function path()
    {
        $path = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';

        return str_contains($path, '?') ? explode('?', $path)[0] : $path;
    }
}