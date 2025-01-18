<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pells_controller extends Controller
{
    public function index()
    {
        return view('pells');
    }
}
