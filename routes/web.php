<?php

use App\Http\Controllers\pells_controller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\project_controller;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/project', [project_controller::class,'index'])->name('/project');
Route::get('/pells', [pells_controller::class,'index'])->name('/pells');




//home
Route::get('/home',[App\Http\controllers\HomeController::class,'index']);
    

//route barang

//tampil
Route::get('/admin/barang/tampil',[App\Http\controllers\BarangController::class,'tampil'])->name('admin.barang.tampil');
//post
Route::post('/admin/barang/tampil',[App\Http\controllers\BarangController::class,'post'])->name('admin.barang.post');
//tambah
Route::get('/admin/barang/tambah',[App\Http\controllers\BarangController::class,'tambah'])->name('admin.barang.tambah');
//edit
Route::get('/admin/barang/edit/{id}',[App\Http\controllers\BarangController::class,'edit'])->name('admin.barang.edit');
//hapus
Route::get('/admin/barang/tampil/delete/{id}',[App\Http\controllers\BarangController::class,'delete']);



//route cabang

//tampil
Route::get('/admin/cabang/tampil',[App\Http\controllers\CabangController::class,'tampil'])->name('admin.cabang.tampil');
//post
Route::post('/admin/cabang/tampil',[App\Http\controllers\CabangController::class,'post'])->name('admin.cabang.post');
//tambah
Route::get('/admin/cabang/tambah',[App\Http\controllers\CabangController::class,'tambah'])->name('admin.cabang.tambah');
//edit
Route::get('/admin/cabang/edit/{id}',[App\Http\controllers\CabangController::class,'edit'])->name('admin.cabang.edit');
//hapus
Route::get('/admin/cabang/tampil/delete/{id}',[App\Http\controllers\CabangController::class,'delete']);


//route buku

Route::get('/admin/buku/tampil',[App\Http\Controllers\BukuController::class,'tampil'])->name('admin.buku.tampil');
//post
Route::post('/admin/buku/tampil',[App\Http\Controllers\BukuController::class,'post'])->name('admin.buku.post');
//tambah
Route::get('/admin/buku/tambah',[App\Http\Controllers\BukuController::class,'tambah'])->name('admin.buku.tambah');
//edit
Route::get('/admin/buku/edit/{id}',[App\Http\Controllers\BukuController::class,'edit'])->name('admin.buku.edit');
//hapus
Route::get('/admin/buku/tampil/delete/{id}',[App\Http\Controllers\BukuController::class,'delete']);

//route pekerja

Route::get('/admin/pekerja/tampil',[App\Http\Controllers\PekerjaController::class,'tampil'])->name('admin.pekerja.tampil');
//post
Route::post('/admin/pekerja/tampil',[App\Http\Controllers\PekerjaController::class,'post'])->name('admin.pekerja.post');
//tambah
Route::get('/admin/pekerja/tambah',[App\Http\Controllers\PekerjaController::class,'tambah'])->name('admin.pekerja.tambah');
//edit
Route::get('/admin/pekerja/edit/{id}',[App\Http\Controllers\PekerjaController::class,'edit'])->name('admin.pekerja.edit');
//hapus
Route::get('/admin/pekerja/tampil/delete/{id}',[App\Http\Controllers\PekerjaController::class,'delete']);

Route::get('/page/data-barang',[App\Http\Controllers\InbarangController::class,'barang'])->name('page.data-barang');