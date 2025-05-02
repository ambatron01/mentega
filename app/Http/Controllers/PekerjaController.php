<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pekerja;

class pekerjaController extends Controller
{
    public function tampil()
    {
        $pekerja = pekerja::all();  
        return View('profile.admin.pekerja.tampil' , compact('pekerja'));
    }
    
    public function tambah()
    {
        return view('in-pekerja.tambah');
    }
    public function edit($id)
    {
        $pekerja = pekerja::findOrFail($id);
        return view('in-pekerja.edit' , compact('pekerja'));
    }
    public function post(Request  $request)
    {

        $id =$request->get('id');
        if ($id) {
        
            $pekerja = pekerja::find($id);
        } else  {
        
            $pekerja = new pekerja;
        }
        $pekerja->nama_pekerja=$request->get('nama_pekerja');
        $pekerja->tugas=$request->get('tugas');
        $pekerja->no_telepon=$request->get('no_telepon');
        $pekerja->save();
        return redirect()->route('page.data-pekerja.post');
    }
    public function delete($id)
    {
        $pekerja = pekerja::findOrFail($id);
        $pekerja->delete();
        
        return redirect()->route('page.data-pekerja');
    }
}
