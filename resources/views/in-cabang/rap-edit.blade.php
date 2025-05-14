<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <br>
    <h2 style="text-align: center;"><i>Ubah Data</i></h2>
    <br>
    <form action="{{ route('admin.cabang.post') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="text" name="id" value="{{$cabang->id}}">
      
      <div class="mb-3">
        <label class="form-label" for="nama_cabang">Nama cabang</label>
        <input type="text" class="form-control" name="nama_cabang" id="nama_cabang" value="{{$cabang->nama_cabang}}" placeholder="Masukkan nama cabang" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label" for="daerah">Daerah</label>
        <input type="text" class="form-control" name="daerah" id="daerah" value="{{$cabang->daerah}}" placeholder="Masukan Daerah" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label" for="tanggal">Tanggal</label>
        <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{$cabang->tanggal}}" placeholder="Masukan Tanggal" required>
      </div>

      <div class="mb-3">
        <label class="form-label" for="jumlah_buku">Jumlah_buku</label>
        <input type="text" class="form-control" name="jumlah_buku" id="jumlah_buku" value="{{$cabang->jumlah_buku}}" placeholder="jumlah_buku" required>
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
    </html>
    