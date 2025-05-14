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
    <form action="{{ route('admin.buku.post') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="text" name="id" value="{{$buku->id}}">
      
      <div class="mb-3">
        <label class="form-label" for="nama_buku">Nama buku</label>
        <input type="text" class="form-control" name="nama_buku" id="nama_buku" value="{{$buku->nama_buku}}" placeholder="Masukkan nama buku" required>
      </div>
      
      <div class="mb-3">
        <label class="form-label" for="jenis">Jenis</label>
        <select name="jenis"  value="{{$buku->jenis}}">
          <option value="cerita">Buku Cerita</option>
          <option value="dongeng">Buku Dongeng</option>
          <option value="pelajaran">Buku Pelajaran</option>
        </select>
      </div>
      
      <div class="mb-3">
        <label class="form-label" for="tanggal">Tanggal</label>
        <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{$buku->tanggal}}" placeholder="tanggal" required>
      </div>

      <div class="mb-3">
        <label class="form-label" for="jumlah_buku">Jumlah Buku</label>
        <input type="text" class="form-control" name="jumlah_buku" id="jumlah_buku" value="{{$buku->jumlah_buku}}" placeholder="jumlah_buku" required>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>