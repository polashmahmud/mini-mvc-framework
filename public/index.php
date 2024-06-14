<?php

require_once __DIR__ . '/../src/Support/helper.php';
require_once base_path() . '/vendor/autoload.php';
require_once base_path() . '/routes/web.php';

$route = new \Polash\Minilara\Http\Route(new \Polash\Minilara\Http\Request(), new \Polash\Minilara\Http\Response());

$route->resolve();