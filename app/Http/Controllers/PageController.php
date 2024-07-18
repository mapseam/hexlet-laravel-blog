<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about()
    {
        // Шаблон находится по пути resources/views/page/about.blade.php
        return view('page.about');
    }
}
