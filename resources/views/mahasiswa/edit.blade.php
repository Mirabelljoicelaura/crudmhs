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
        <a href="{{route('mahasiswa.index')}}" class="btn btn-primary mb-3"> Data Mahasiswa</a>
        <div class="card">
            <div class="card-body">
                <form action="{{route('mahasiswa.update',$mahasiswa->id)}}" method="POST">
                    @csrf
                    @method('patch')
                    <div class="mb-3">
                        <label for="NIM" class="form-label">NIM</label>
                        <input type="text" class="form-control" name="nim" value="{{$mahasiswa->nim}}" id="nim" placeholder="Your NIM">
                    </div>
                    <div class="mb-3">
                        <label for="Nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" value="{{$mahasiswa->nama}}"id="nama" placeholder="Your Name">
                    </div>
                    <div class="mb-3">
                        <label for="Jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" value="{{$mahasiswa->jurusan}}" id="jurusan" placeholder="Your Major">
                    </div>
                    <button type="submit" class="btn btn-primary float-end" >Edit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>
