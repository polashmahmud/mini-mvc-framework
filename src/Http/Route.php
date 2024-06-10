<?php

namespace Polash\Minilara\Http;

class Route
{
    public $request;

    public $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public static $routes = [];

    public static function get($route, $action)
    {
        self::$routes['get'][$route] = $action;
    }

    public static function post($route, $action)
    {
        self::$routes['post'][$route] = $action;
    }

}