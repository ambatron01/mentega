<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerja;


class DatapekerjaController extends Controller
{
    public function pekerja()
    {
        $pekerja = pekerja::get();
        return view( '/page/data-pekerja', ['pekerja'=>$pekerja]);
    }
}

