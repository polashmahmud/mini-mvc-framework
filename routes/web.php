<?php

use App\Controllers\HomeController;
use Polash\Minilara\Http\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', function () {
    echo 'About Page';
});