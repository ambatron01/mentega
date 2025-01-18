<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pells extends Controller
{
    public function index()
    {
        return view('pells');
    }
}
