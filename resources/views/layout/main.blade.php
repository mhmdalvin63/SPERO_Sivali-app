<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sivali.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('../fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="../fontawesome/css/all.css">

    {{-- <link rel="stylesheet" href="{{ asset('../fontawesome/css/fontawesome.min.css') }}"/> --}}
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" /> --}}
    {{-- <style>
        .container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
      --bs-gutter-x: 1.5rem;
      --bs-gutter-y: 0;
      width: 100%;
      /* padding-right: calc(var(--bs-gutter-x) * .5); */
      /* padding-left: calc(var(--bs-gutter-x) * .5); */
      margin-right: auto;
      margin-left: auto;
      }
    </style> --}}

    <style>
      body{
        /* overflow-x: hidden; */
      }
    </style>
  </head>
  <body>
    @include('part.navbar')
    
    @yield('content')

    @include('part.footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>