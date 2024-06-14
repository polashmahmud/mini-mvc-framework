<?php

use Polash\Minilara\View\View;

if (!function_exists('base_path')) {
    function base_path()
    {
        return dirname(__DIR__) . '/../';
    }
}

if (!function_exists('view_path')) {
    function view_path()
    {
        return base_path() . '/views/';
    }
}

if (!function_exists('view')) {
    function view($view, $params = [])
    {
        return View::make($view, $params);
    }
}
