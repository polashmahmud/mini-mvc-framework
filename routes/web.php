<?php

use Polash\Minilara\Http\Route;

Route::get('/', function () {
    echo 'Home Page';
});


Route::get('/about', function () {
    echo 'About Page';
});