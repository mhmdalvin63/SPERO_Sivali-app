@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/artikel.css')}}">

@section('content')
    
<div class="container d-flex align-items-end" id="artikel">
    <div class="artikel__content">
        <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
    </div>
</div>

<div class="container mt-5">
    <p class="title fw-bold fs-4 mb-0">Tipe Dapur Impian Anda Di Rumah</p>
    <p class="desc_1 fs-5">Temukan semua barangnya hanya di Sivali Furniture    </p>
    <p class="desc_2">Lorem ipsum dolor sit amet consectetur. Sapien consectetur in quam suscipit ullamcorper ullamcorper. Viverra ac sodales fringilla facilisis at nulla eget ut. Nunc in posuere orci aenean mi tempus ut. Eget leo blandit erat urna varius urna. At hendrerit nunc fermentum accumsan mauris feugiat. Viverra nulla in enim vitae ac euismod vitae cras. Ipsum dictum tellus quis nulla et pharetra. Interdum praesent elit et sed ut est. Quis congue nisi elementum felis. Pellentesque urna in sed ultricies. Id eget consequat sed lectus id morbi.</p>
</div>

<div class="container my-5" id="bottom__artikel">
    <div class="artikel__bottom">
        <h1 class="fw-bold fs-3 mb-4">ARTIKEL</h1>
        <div class="row" list__artikel>
            <div class="col-md-4 mt-3 la__image">
                <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
                <div class="overlay">
                    <p class="mb-1 fw-bold">Barang dengan kualitas Terbaik</p>
                    <a href="" class="d-flex align-items-center gap-2 text-decoration-none text-white">
                        <i class="fa-solid fa-circle-chevron-right" style="color: #ffffff;"></i>
                        <p class="mb-1">Selengkapnya</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-3 la__image">
                <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
                <div class="overlay">
                    <p class="mb-1 fw-bold">Barang dengan kualitas Terbaik</p>
                    <a href="" class="d-flex align-items-center gap-2 text-decoration-none text-white">
                        <i class="fa-solid fa-circle-chevron-right" style="color: #ffffff;"></i>
                        <p class="mb-1">Selengkapnya</p>
                    </a>
                </div>
            </div>
            <div class="col-md-4 mt-3 la__image">
                <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
                <div class="overlay">
                    <p class="mb-1 fw-bold">Barang dengan kualitas Terbaik</p>
                    <a href="" class="d-flex align-items-center gap-2 text-decoration-none text-white">
                        <i class="fa-solid fa-circle-chevron-right" style="color: #ffffff;"></i>
                        <p class="mb-1">Selengkapnya</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection