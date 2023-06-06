@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/home.css')}}">
<link rel="stylesheet" href="{{asset('../js/coba.js')}}">

@section('content')
<div id="top">
    <div class="top_content d-flex align-items-center">

        <div class="container">
            <div class="" id="carousel">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="slider">
                            @foreach ($Banner as $key => $item)
                            <a href="{{ route('detail_barang', $item->id_barang)}}" target="_blank">
                                <div class="carousel-item {{ $key == 0 ? 'active' : ''}}" id="carousel_img">
                                    <img class="img-fluid" src="{{asset('../storage/image/'.'/'.$item->gambar_banner)}}"
                                        alt="">
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="next_prev" id="lg-np">
                <button style="z-index: 3;" class="position-absolute carousel-control-prev" type="button"
                    data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="fw-bold" style="color: black;">Prev</span>
                </button>
                <button style="z-index: 3;" class="position-absolute carousel-control-next" type="button"
                    data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="fw-bold" style="color: black;">Next</span>
                </button>
            </div>
            <div class="next_prev" id="sm-np">
                <button class="position-absolute carousel-control-prev" type="button"
                    data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="parent_icon" aria-hidden="true">
                        <i class="fa-solid fa-angle-left"></i>
                    </span>
                </button>
                <button class="position-absolute carousel-control-next" type="button"
                    data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="parent_icon" aria-hidden="true">
                        <i class="fa-solid fa-angle-right"></i>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mb-5" id="kategoribarang">
    <h3 class="mb-5 text-center fw-bold">Kategori Barang</h3>
    <div class="k_b d-flex justify-content-center">
        @foreach ($kategoriBarang as $item)
        <a class="text-black" href="{{ route('katalogFilter', $item->id)}}#list_katalog" style="text-decoration: none;">
            <div class="logo">
                <div class="logo__img">
                    <img class="img-fluid" src="{{asset('../storage/image/'.'/'.$item->gambar_kategori)}}" alt=""
                        width="50">
                </div>
                <div class="desc_logo_img">
                    <p class="mt-3 text-center">{{$item->kategori_barang}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

<div class="d-flex align-items-center mb-4 pb-4" style="background: #F5F6F8; height: max-content;
        transform: translateY(15rem);">
    <div class="container">
        <div class="row gap-5 tfk" style="align-items: center;">
            <div class="col-md-5" id="tfk_left">
                <img id="ab_lemari" src="{{asset('../img/furniture-home.png')}}" alt="">
                <div class="circle position-relative">
                    <div class="circle1"></div>
                    <div class="circle2"></div>
                </div>
            </div>
            <div class="col-md-6 d-flex" id="tfk_right">
                <div class="cont_3">
                    <h1>Tentang Furniture Kita</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat delectus facere blanditiis
                        voluptatum labore aliquam fuga dicta voluptas vero porro!</p>
                    <a class="btn btn-primary" href="/katalog" role="button">Selengkapnya >></a>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="list_barang" class="container" style="margin-top: 7rem;height: max-content;
        transform: translateY(9rem);">
    <h1 class="text-center fw-bold">Katalog Kami</h1>
    <div class="menu d-flex gap-2 flex-wrap justify-content-center mt-5">
        <a id="lb_filter" href="{{ URL::current()}}#list_barang" class="btn menu_btn {{ (!isset($_GET['sort'])) ? 'active' : '' }}"
            role="button">Semua</a>
        <a id="lb_filter" href="{{ URL::current()."?sort=terbaru"}}#list_barang"
            class="btn menu_btn {{ ((isset($_GET['sort']) ? $_GET['sort'] : '') == 'terbaru') ? 'active' : '' }}"
            role="button">Terbaru</a>
        <a id="lb_filter" href="{{ URL::current()."?sort=terlaris"}}#list_barang"
            class="btn menu_btn {{ ((isset($_GET['sort']) ? $_GET['sort'] : '') == 'terlaris') ? 'active' : '' }}"
            role="button">Terlaris</a>
        <a id="lb_filter" href="{{ URL::current()."?sort=termurah"}}#list_barang"
            class="btn menu_btn {{ ((isset($_GET['sort']) ? $_GET['sort'] : '') == 'termurah') ? 'active' : '' }}"
            role="button">Termurah</a>
        <a id="lb_filter" href="{{ URL::current()."?sort=termahal"}}#list_barang"
            class="btn menu_btn {{ ((isset($_GET['sort']) ? $_GET['sort'] : '') == 'termahal') ? 'active' : '' }}"
            role="button">Termahal</a>
        <a id="lb_filter" href="{{ URL::current()."?sort=promo"}}#list_barang"
            class="btn menu_btn {{ ((isset($_GET['sort']) ? $_GET['sort'] : '') == 'promo') ? 'active' : '' }}"
            role="button">Promo</a>
    </div>
    <div class="row mt-5">
        @foreach ($barang->take(4) as $item)
        <div class=" col-md-4 col-lg-3 col-12 col-sm-6 mt-4" id="home_list_barang">
            <a href="{{ route('detail_barang', $item->id)}}">
                <div class="card" id="product">
                    <div class="top_product">
                        {{-- <img src="{{asset('storage/image/'.'/'.$item->gambar_barang)}}" alt=""> --}}
                        <img src="{{$item->file_location.'/'.$item->file_hash}}" title="{{$item->file_name}}" alt=""
                            width="75">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title text-black">{{$item->judul_barang}}</h5>
                        {{-- <p class="card-text">Rp.{{ number_format($item->harga, 2, ',', '.') }}</p> --}}
                        @if ($item->harga_diskon==null)
                        <p class="card-text fw-bold mb-0" style="font-size: .75rem; visibility: hidden;">
                            Rp.{{ number_format($item->harga_diskon, 2, ',', '.') }}</p>
                        <p class="card-text fw-bold mb-0" style="color: #19376D;">
                            Rp.{{ number_format($item->harga_asli, 2, ',', '.') }}</p>
                        @else
                        <p class="card-text fw-bold mb-0"
                            style="font-size: .75rem; text-decoration: line-through; color: red;">
                            Rp.{{ number_format($item->harga_asli, 2, ',', '.') }}</p>
                        <p class="card-text fw-bold mb-0" style="color: #19376D;">
                            Rp.{{ number_format($item->harga_diskon, 2, ',', '.') }}</p>
                        @endif
                        <div class="stok_terjual d-flex justify-content-between">
                            <p class="mb-3 text-black">Stok : {{ $item->stok }}</p>
                            <p class="mb-3 text-black">{{ $item->terjual }} terjual</p>
                        </div>
                        <div class="rating">
                            @if($item->rate <= 0) <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                @elseif($item->rate == 1)
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                @elseif($item->rate == 2)
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                @elseif($item->rate == 3)
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                @elseif($item->rate == 4)
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                @elseif($item->rate >= 5)
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                <i class="fa fa-star checked" aria-hidden="true"></i>
                                @endif
                        </div>
                        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
    <a class="d-block fs-5 mt-3 text-end fw-bold text-decoration-none" href="/katalog" role="button">Selengkapnya >></a>
</section>

<section class="container" style="height: max-content; margin-top: 12.5rem;">
    <div class="grid-container href-artikel"> 
            <a href="{{ route('detail_artikel', $Artikel[0]->id)}}" class="grid-item item1 mt-3 la__image">
                {{-- <img class="img-fluid" src="{{asset('../img/artikel-kami-img.png')}}" alt=""> --}}
                <img class="img-fluid" src="{{asset('../storage/image/'.'/'.$Artikel[0]->gambar_artikel)}}" alt="">
                <div class="overlay">
                    <p class="mb-1 fw-bold">{{ $Artikel[0]->judul_artikel }}</p>
                    <p>{{ $Artikel[0]->subjudul_artikel }}</p>
                </div>
            </a>
            <a href="{{ route('detail_artikel', $Artikel[1]->id)}}" class="grid-item item2 mt-3 la__image">
                <img class="img-fluid" src="{{asset('../storage/image/'.'/'.$Artikel[1]->gambar_artikel)}}" alt="">
                {{-- <img class="img-fluid" src="{{asset('../storage/image/'.'/'.$item->gambar_artikel)}}" alt=""> --}}
                <div class="overlay">
                    <p class="mb-1">{{ $Artikel[1]->subjudul_artikel }}</p>
                </div>
            </a>
            <a href="{{ route('detail_artikel', $Artikel[2]->id)}}" class="grid-item item3 mt-3 la__image">
                <img class="img-fluid" src="{{asset('../storage/image/'.'/'.$Artikel[2]->gambar_artikel)}}" alt="">
                <div class="overlay">
                    <p class="mb-1">{{ $Artikel[2]->subjudul_artikel }}</p>
                </div>
            </a>
            <a href="{{ route('detail_artikel', $Artikel[3]->id)}}" class="grid-item item4 mt-3 la__image">
                <img class="img-fluid" src="{{asset('../storage/image/'.'/'.$Artikel[3]->gambar_artikel)}}" alt="">
                <div class="overlay">
                    <p class="mb-1 fw-bold">{{ $Artikel[3]->subjudul_artikel }}</p>
                </div>
            </a>
            <a href="{{ route('detail_artikel', $Artikel[4]->id)}}" class="grid-item item5 mt-3 la__image">
                <img class="img-fluid" src="{{asset('../storage/image/'.'/'.$Artikel[4]->gambar_artikel)}}" alt="">
                <div class="overlay">
                    <p class="mb-1 fw-bold">{{ $Artikel[4]->judul_artikel }}</p>
                    <p>{{ $Artikel[4]->subjudul_artikel }}</p>
                </div>
            </a>
    </div>
</section>

{{-- <section class="container" style="height: max-content;
        margin-top: 12.5rem;">
    <div class="grid-container href-artikel">
        <a href="/artikel" class="grid-item item1 mt-3 la__image">
            <img class="img-fluid" src="{{asset('../img/artikel-kami-img.png')}}" alt="">
            <div class="overlay">
                <p class="mb-1 fw-bold">SAMPAI JUMPA DI TOKO</p>
                <p>Sebelum berkunjung, lihat halaman Toko dan Pick-up Point SIVALI untuk mengetahui informasi seputar
                    penawaran, event dan lainnya.</p>
            </div>
        </a>
        <a href="/artikel" class="grid-item item2 mt-3 la__image">
            <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
            <div class="overlay">
                <p class="mb-1">Barang dengan kualitas Terbaik</p>
            </div>
        </a>
        <a href="/artikel" class="grid-item item3 mt-3 la__image">
            <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
            <div class="overlay">
                <p class="mb-1">Temukan <br> barang - barang lokal buatan <br> Kota Jepara</p>
            </div>
        </a>
        <a href="/artikel" class="grid-item item4 mt-3 la__image">
            <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
            <div class="overlay">
                <p class="mb-1 fw-bold">Semua Jenis Peralatan Dapur</p>
            </div>
        </a>
        <a href="/artikel" class="grid-item item5 mt-3 la__image">
            <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
            <div class="overlay">
                <p class="mb-1 fw-bold">Tipe Dapur Impian Anda Dirumah</p>
                <p>Temukan semua barangnya hanya di Sivali Furniture</p>
            </div>
        </a>
    </div>
</section> --}}

<script src="https://code.jquery.com/jquery-3.6.3.min.js"integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
</script>
<script>
$(#lb_filter).on("click", function(){
$('#list-barang').load(' #list-barang')
alert('Reloaded')
});
</script>

@endsection
