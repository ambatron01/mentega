<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cabang;

class DatacabangController extends Controller
{
    public function cabang()
    {
        $cabang = cabang::get();
        return view( '/page/data-cabang', ['cabang'=>$cabang]);
    }
}
