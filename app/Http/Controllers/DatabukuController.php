<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;


class DatabukuController extends Controller
{
    public function buku()
    {
        $buku = buku::get();
        return view( '/page/data-buku', ['buku'=>$buku]);
    }
}
    