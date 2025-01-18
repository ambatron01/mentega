<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class project_controller extends Controller
{
    public function index()
    {
        return view('project');
    }
}
