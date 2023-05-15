<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <style>
        .img-cover{
        object-fit: cover;
        object-position: center;
        }
    </style>
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="ratio ratio-1x1 rounded-circle overflow-hidden">
                    <img src="https://i.stack.imgur.com/fcbpv.jpg?s=256&g=1" class="card-img-top img-cover" alt="">
                </div>
                <h3>Muhammad Alvin</h3>
            </div>
            <div class="col-md-8">
                <h1>Nama Lengkap :</h1>
                {{-- @foreach ($profil as $item)     --}}
                    @if ($profil->nama_lengkap)
                        <p>{{$profil->first()->nama_lengkap}}</p>
                    @else   
                        <p>User4d41cd104802dd06fb82674f76e0d3dab8446339</p>
                    @endif
                {{-- @endforeach --}}
                {{-- <h1>Alamat :</h1>
                <p>{{$item->alamat}}</p>
                <h1>Tempat Lahir :</h1>
                <p>{{$item->tempat_lahir}}</p>
                <h1>Tanggal Lahir :</h1>
                <p>{{$item->tanggal_lahir}}</p>
                <h1>Email :</h1>
                <p>{{$item->email}}</p> --}}
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>