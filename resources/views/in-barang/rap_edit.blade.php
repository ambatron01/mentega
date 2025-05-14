<!doctype html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <h2 style="text-align: center;"><i>Ubah Data</i></h2>
    <br>
    <form action="{{ route('admin.barang.post') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="text" name="id" value="{{$barang->id}}">
      
      <div class="mb-3">
        <label class="form-label" for="nama_barang">Nama Barang</label>
        <input type="text" class="form-control" name="nama_barang" id="nama_barang" value="{{$barang->nama_barang}}" placeholder="Masukkan nama barang" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label" for="tersedia">Tersedia</label>
        <input type="text" class="form-control" name="tersedia" id="tersedia" value="{{$barang->tersedia}}" placeholder="Jumlah tersedia" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label" for="terjual">Terjual</label>
        <input type="text" class="form-control" name="terjual" id="terjual" value="{{$barang->terjual}}" placeholder="Jumlah terjual" required>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>