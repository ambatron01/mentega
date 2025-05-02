<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cabang;

class cabangcontroller extends Controller
{
    public function tampil()
    {
        $cabang = cabang::all();  
        return View('profile.admin.cabang.tampil', compact('cabang'));
    }
    
    public function tambah()
    {
        return view('in-cabang.tambah');
    }
    public function edit($id)
    {
        $cabang=cabang::findOrFail($id);
        return view('in-cabang.edit' , compact('cabang'));
    }
    public function post(Request  $request)
    {

        $id =$request->get('id');
        if ($id) {
        
            $cabang = cabang::find($id);
        } else  {
        
            $cabang = new cabang;
        }
        $cabang->nama_cabang=$request->get('nama_cabang');
        $cabang->daerah=$request->get('daerah');
        $cabang->tanggal=$request->get('tanggal');
        $cabang->jumlah_buku=$request->get('jumlah_buku');
        $cabang->save();
        return redirect()->route('page.data-cabang.post');
    }
    public function delete($id)
    {
        $cabang = cabang::findOrFail($id);
        $cabang->delete();
        
        return redirect()->route('page.data-cabang');
    }
}
