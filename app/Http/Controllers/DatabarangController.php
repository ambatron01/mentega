<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class DatabarangController extends Controller
{
    public function barang()
    {
        $barang = barang::get();
        return view( '/page/data-barang', ['barang'=>$barang]);
    }
}
