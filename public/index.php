<?php

require_once __DIR__ . '/../vendor/autoload.php';

require_once __DIR__ . '/../routes/web.php';

$route = new \Polash\Minilara\Http\Route(new \Polash\Minilara\Http\Request(), new \Polash\Minilara\Http\Response());

dd($route->request->path());