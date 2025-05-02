<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center"><I>Data buku</I></h1>
    <a href="{{asset('/admin/buku/tambah')}}"><button class="btn btn-primary me-md-2 "type="button"><i>Tambah Jenis Dan Jumlah buku</i></button> </a>
    <div class="shadow p-3 mb-bg-body rounded">
    <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama Buku</th>
      <th scope="col">Jenis Buku</th>
      <th scope="col">Tanggal Penerimaan</th>
      <th scope="col">Jumlah Buku</th>
    </tr>
    </thead>
    <?php $nomor = 1 ?>
    @foreach ($buku as $no => $book)
<tbody>
  <tr>  
    <th scope="row">{{ $nomor++}} </th>
    <td>{{$book->nama_buku}}</td>
    <td>{{$book->jenis}}</td>
    <td>{{$book->tanggal}}</td>
    <td>{{$book->jumlah_buku}}</td>
  </tr>
  @endforeach
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
