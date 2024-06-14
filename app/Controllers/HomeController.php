<?php

namespace App\Controllers;

use Polash\Minilara\View\View;

class HomeController
{
    public function index()
    {
        return view('home.index', [
            'name' => 'Polash Mahmud'
        ]);
    }
}