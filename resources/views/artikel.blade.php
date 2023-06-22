@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/artikel.css')}}">

@section('content')
    

<div class="container my-5" id="bottom__artikel">
    <div class="artikel__bottom">
        <h1 class="fw-bold fs-3 mb-4">ARTIKEL</h1>
        <div class="row" list__artikel>
            @foreach ($Artikel as $item)
                <div class="col-md-4 mt-3 la__image">
                    <a href="{{ route('detail_artikel', $item->id)}}">
                        <img class="artikel_img rounded-4" src="{{asset('img/'.$item->gambar_artikel)}}" alt="">
                    {{-- <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt=""> --}}
                    <div class="overlay">
                        <p class="mb-1 fw-bold text-start">{{$item->judul_artikel}}</p>
                        <a href="{{route('detail_artikel', $item->id)}}"selengkapnya class="d-flex align-items-center gap-2 text-decoration-none text-white">
                            <i class="fa-solid fa-circle-chevron-right" style="color: #ffffff;"></i>
                            <p class="mb-0">Selengkapnya</p>
                        </a>
                    </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>


@endsection