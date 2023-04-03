<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Data Mahasiswa</h1>
        <a href="{{route('mahasiswa.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{session('success')}}
            </div>
        @endif
        <div class="card">
            <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>NO</th>
                            <th>NIM</th>
                            <th>NAMA</th>
                            <th>JURUSAN</th>
                            <th>AKSI</th>
                        </thead>
                        <tbody>
                            @foreach ($mahasiswa as $no=>$hasil)
                                <tr>
                                    <td>{{$no+1}}</td>
                                    <td>{{$hasil->nim}}</td>
                                    <td>{{$hasil->nama}}</td>
                                    <td>{{$hasil->jurusan}}</td>
                                    <td>
                                        <form action="{{route('mahasiswa.destroy', $hasil->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <a href="{{route('mahasiswa.edit',$hasil->id)}}" class="btn btn-success btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Hapus</a>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
