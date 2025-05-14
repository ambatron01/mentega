<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <body>
    <br>
    <h1 style="text-align: center;"><i>Tambah Buku</i></h1>
    <br>
    <form action="{{ route('admin.buku.post') }}" method="POST" enctype="multipart/form-data">
      @csrf
  <div class="mb-3">
    <label class="form-label">Nama Buku</label>
    <input type="text" class="form-control" name="nama_buku" id="nama_buku" >
  </div>
  <div class="mb-3">
    <label class="form-label">jenis</label>
    <select name="jenis">
      <option value="cerita">Buku Cerita</option>
      <option value="dongeng">Buku Dongeng</option>
      <option value="pelajaran">Buku Pelajaran</option>
      <option value="pelajaran">Buku Musik</option>
      <option value="pelajaran">Buku Sejarah</option>
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Tanggal</label>
    <input type="date" class="form-control" name="tanggal" id="tanggal">
  </div>
    <div class="mb-3">
    <label class="form-label">Jumlah Buku</label>
    <input type="text" class="form-control" name="jumlah_buku" id="jumlah_buku">
  </div>
      <button type="submit">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
