<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <h1 style="text-align: center;"><i>Tambah Barang</i></h1>
    <br>
    <form action="{{ route('page.data-barang.post') }}" method="POST" enctype="multipart/form-data">
      @csrf
  <div class="mb-3">
    <label class="form-label">nama barang</label>
    <input type="text" class="form-control" name="nama_barang" id="nama_barang" >
  </div>
  <div class="mb-3">
    <label class="form-label">tersedia</label>
    <input type="text" class="form-control" name="tersedia">
  </div>
  <div class="mb-3">
    <label class="form-label">terjual</label>
    <input type="text" class="form-control" name="terjual">
  </div>
      <button type="submit">Submit</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>