<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class project extends Controller
{
    public function index()
    {
        return view('project');
    }
}
