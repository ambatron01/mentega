<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pekerja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center"><I>Data pekerja</I></h1>
    <div class="shadow p-3 mb-bg-body rounded">
    <table class="table">
  <thead class="table-dark">
    <tr>
      <th scope="col">no</th>
      <th scope="col">Nama Pekerja</th>
      <th scope="col">Bagian Tugas</th>
      <th scope="col">No Telepon</th>
    </tr>
    </thead>
    <?php $nomor = 1 ?>
    @foreach ($pekerja as $no => $worker)
<tbody>
  <tr>  
    <th scope="row">{{ $nomor++}} </th>
    <td>{{$worker->nama_pekerja}}</td>
    <td>{{$worker->tugas}}</td>
    <td>{{$worker->no_telepon}}</td>
  </tr>
  @endforeach
  </tbody>
</table>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
