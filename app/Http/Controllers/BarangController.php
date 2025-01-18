<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class Barangcontroller extends Controller
{
    public function tampil()
    {
        $barang = barang::all();
        return View('admin.barang.tampil', compact('barang'));
    }
    
    public function tambah()
    {
        return view('admin.barang.tambah');
    }
    public function edit($id)
    {
        $barang=barang::findOrFail($id);
        return view('admin.barang.edit' , compact('barang'));
    }
    public function post(Request  $request)
    {

        $id =$request->get('id');
        if ($id) {
        
            $barang = barang::find($id);
        } else  {
        
            $barang = new barang;
        }
        $barang->nama_barang=$request->get('nama_barang');
        $barang->tersedia=$request->get('tersedia');
        $barang->terjual=$request->get('terjual');
        $barang->save();
        return redirect()->route('admin.barang.tampil');
    }
    public function delete($id)
    {
        $barang = barang::findOrFail($id);
        $barang->delete();
        
        return redirect()->route('admin.barang.tampil');
    }
}
