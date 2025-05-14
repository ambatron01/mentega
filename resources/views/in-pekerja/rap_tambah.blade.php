<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Pekerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <h1 style="text-align: center;"><i>Tambah Pekerja</i></h1>
    <br>
    <form action="{{ route('admin.pekerja.tampil') }}" method="POST" enctype="multipart/form-data">
      @csrf
  <div class="mb-3">
    <label class="form-label">Nama Pekerja</label>
    <input type="text" class="form-control" name="nama_pekerja" id="nama_pekerja" >
  </div>
  <div class="mb-3">
    <label class="form-label">Bagian Tugas</label>
    <input type="text" class="form-control" name="tugas">
  </div>
  <div class="mb-3">
    <label class="form-label">No Telepon</label>
    <input type="text" class="form-control" name="no_telepon">
  </div>
      <button type="submit">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>