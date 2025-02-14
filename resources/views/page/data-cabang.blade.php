<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h2 style="text-align: center;"><i>Cabang Terbaik</i></h2>
    <div class="shadow p-3 mb-bg-body rounded">
    <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">no</th>
      <th scope="col">nama cabang</th>
      <th scope="col">tempat daerah</th>
      <th scope="col">tanggal</th>
      <th scope="col">jumlah pengiriman buku</th>
    </tr>
    </thead>
    <?php $nomor = 1 ?>
    @foreach ($cabang as $no => $place)
<tbody>
  <tr>  
    <th scope="row">{{$nomor++}}</th>
    <td>{{ $place->nama_cabang }}</td>
    <td>{{ $place->daerah }}</td>
    <td>{{ $place->tanggal }}</td>
    <td>{{ $place->jumlah_buku }}</td>
  </tr>
  @endforeach
  </tbody>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>