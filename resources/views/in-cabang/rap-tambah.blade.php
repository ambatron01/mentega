<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Cabang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <h2 style="text-align: center;"><i>Tambah Data Cabang</i></h2>
    <br>
    <form action="{{ route('admin.cabang.post') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label class="form-label">Nama Cabang</label>
    <input type="text" class="form-control" name="nama_cabang" >
  </div>
  <div class="mb-3">
    <label class="form-label">daerah</label>
    <input type="text" class="form-control" name="daerah">
  </div>
  <div class="mb-3">
    <label class="form-label">Tanggal</label>
    <input type="date" class="form-control" name="tanggal">
  </div>
  <div class="mb-3">
    <label class="form-label">Jumlah Buku</label>
    <input type="text" class="form-control" name="jumlah_buku">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<br>
<a href="{{ asset('admin/cabang/edit')}}">Edit Keterangan Buku</a>
    <br>
    <a href="{{ asset('admin/cabang/tampil')}}">Data Cabang</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>