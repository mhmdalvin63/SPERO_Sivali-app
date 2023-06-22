@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/home.css')}}">
<link rel="stylesheet" href="{{asset('../js/coba.js')}}">
<style>
    .menu.active,.menu.btn:hover{ 
        background-color:#19376D; 
    }
    #home_list_barang{
        /* width: 23%; */
        /* height: unset; */
        transition: none;
        float: left;
        display: contents;
        padding: 0px;
        position: relative;
        border: none;
        margin: 10px;
        cursor: pointer;
    }
    #lbblbb a{
        /* width: 100%; */
        /* height: unset; */
        transition: none;
        float: left;
        display: inline-block;
        padding: 0px;
        position: relative;
        border: none;
        margin: 10px;
        cursor: pointer;
    }
    #logoplus{
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: none;
    }
    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 440px) {
        #lbblbb a{
            width: 39vw;
        }
    }

    @media only screen and (min-width: 441px) and (max-width: 489px) {
        #lbblbb a{
            width: 40.5vw;
        }
    }

    @media only screen and (min-width: 490px) and (max-width: 600px) {
        #lbblbb a{
            width: 41vw;
        }
    }
    
    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
        #lbblbb a{
            width: 45%;
        }
    }

    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        #lbblbb a{
            width: 45%;
        }
    }

    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        #lbblbb a{
            width: 22.8%;
        }
    }

    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
        #lbblbb a{
            width: 23%;
        }
    }
</style>
@section('content')
<div id="top">
    <div class="top_content d-flex align-items-center">

        <div class="container">
            <div class="" id="carousel">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="slider">
                            @foreach ($Banner as $key => $item)
                            <a href="#">
                                <div class="carousel-item {{ $key == 0 ? 'active' : ''}}" id="carousel_img">
                                    <img class="img-fluid" src="{{asset('img/'.$item->gambar_banner)}}"
                                        alt="">
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="next_prev" id="lg-np">
                <button style="z-index: 3;" class="ms-5 position-absolute carousel-control-prev" type="button"
                    data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="fw-bold" style="color: black;">Prev</span>
                </button>
                <button style="z-index: 3;" class="position-absolute carousel-control-next me-5" type="button"
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
    <h1 class="mb-5 text-center fw-bold">Kategori Barang</h1>
    <div class="k_b d-flex justify-content-center">
        @foreach ($kategoriBarang as $item)
        {{-- <a class="text-black" href="{{ url('katalog')}}#list_katalog" style="text-decoration: none;"> --}}
        <a class="text-black" href="{{ route('katalogFilter', $item->id)}}" style="text-decoration: none;">
            <div class="logo">
                <div class="logo__img">
                    <img class="img-fluid" src="{{asset('img/'.$item->gambar_kategori)}}" alt=""
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
    <div class="menu d-flex gap-2 flex-wrap justify-content-start justify-content-md-center mt-5">
        <button id="lb_filter" data-filter="Active" onclick="home()" class="home_button btn menu_btn"
            role="button">Semua
        </button>
        <button id="lb_filter" data-filter="Terbaru" onclick="showterbaru()" class="btn menu_btn" role="button">Terbaru</button>
        <button id="lb_filter" data-filter="Terlaris" onclick="showterlaris()" class="btn menu_btn" role="button">Terlaris</button>
        <button id="lb_filter" onclick="showtermurah()" data-filter="Termurah" class="btn menu_btn" role="button">Termurah</button>
        <button id="lb_filter" onclick="showtermahal()" data-filter="Termahal" class="btn menu_btn" role="button">Termahal</button>
        <button id="lb_filter" data-filter="Promo" onclick="showpromo()" class="btn menu_btn" role="button">Promo</button>
    </div>
   <div class="row">
    <div class="col-md-12">
        <div class="row lbblbb mt-5" id="lbblbb">
            @foreach ($barang as $item)
            {{-- <div class="col-md-4 col-lg-3 col-12 col-sm-6 mt-4 list-barang-barang" id="home_list_barang"> --}}
            <div class="list-barang-barang" id="home_list_barang"
                terjual_count="{{$item->terjual}}"
                terbaru_count="{{$item->created_at}}"
                harga_count="
                @if ($item->harga_diskon==null)
                    {{$item->harga_asli}}
                @else
                    {{$item->harga_diskon}}
                @endif"
                data-promosi="{{$item->promosi}}"
                data-status="{{$item->status}}">
                    <a href="{{ route('detail_barang', $item->id)}}" style="text-decoration: none;">
                        <div class="card" id="product">
                            <div class="top_product">
                                {{-- <img src="{{asset('storage/image/'.'/'.$item->gambar_barang)}}" alt=""> --}}
                                <img src="{{'img/'.$item->file_name}}" title="{{$item->file_name}}" alt=""
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
                                <div class="stok_terjual d-flex justify-content-between flex-wrap">
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
    </div>
   </div>
    <a class="d-block fs-5 mt-3 text-end fw-bold text-decoration-none" href="/katalog" role="button">Selengkapnya >></a>
</section>

<section class="container" style="height: max-content; margin-top: 12.5rem;">
    <div class="grid-container href-artikel"> 
           @if(empty($Artikel[0]))
            <img src="{{asset('/img/logoplus.jpg')}}" id="logoplus" alt="">
           @else
            <a id="a-genap" href="{{ route('detail_artikel', $Artikel[0]->id)}}" class="grid-item item1 mt-3 la__image">
            {{-- <img class="img-fluid" src="{{asset('../img/artikel-kami-img.png')}}" alt=""> --}}
            <img class="img-fluid" src="{{asset('img/'.$Artikel[0]->gambar_artikel)}}" alt="">
            <div class="overlay">
                <p class="mb-1 fw-bold">{{ $Artikel[0]->judul_artikel }}</p>
                <p>{{ $Artikel[0]->subjudul_artikel }}</p>
            </div>
            </a>
            @endif
            @if(empty($Artikel[1]))
                <img src="{{asset('../img/logoplus.jpg')}}" id="logoplus" alt="">
            @else
                <a id="a-genap" href="{{ route('detail_artikel', $Artikel[1]->id)}}" class="grid-item item2 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('img/'.$Artikel[1]->gambar_artikel)}}" alt="">
                    {{-- <img class="img-fluid" src="{{asset('img/'.$item->gambar_artikel)}}" alt=""> --}}
                    <div class="overlay">
                        <p class="mb-1">{{ $Artikel[1]->subjudul_artikel }}</p>
                    </div>
                </a>
            @endif
            @if (empty($Artikel[4]))
                <img src="{{asset('../img/logoplus.jpg')}}" id="logoplus" alt="">
            @else
                <a id="a-ganjil" href="{{ route('detail_artikel', $Artikel[4]->id)}}" class="grid-item item3 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('img/'.$Artikel[4]->gambar_artikel)}}" alt="">
                    <div class="overlay">
                        <p class="mb-1">{{ $Artikel[4]->subjudul_artikel }}</p>
                    </div>
                </a>
            @endif
            @if (empty($Artikel[2]))
                <img src="{{asset('../img/logoplus.jpg')}}" id="logoplus" alt="">
            @else
                <a id="a-genap" href="{{ route('detail_artikel', $Artikel[2]->id)}}" class="grid-item item4 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('img/'.$Artikel[2]->gambar_artikel)}}" alt="">
                    <div class="overlay">
                        <p class="mb-1 fw-bold">{{ $Artikel[2]->subjudul_artikel }}</p>
                    </div>
                </a>
            @endif
            @if (empty($Artikel[3]))
                <img src="{{asset('../img/logoplus.jpg')}}" id="logoplus" alt="">
            @else
                <a id="a-genap" href="{{ route('detail_artikel', $Artikel[3]->id)}}" class="grid-item item5 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('img/'.$Artikel[3]->gambar_artikel)}}" alt="">
                    <div class="overlay">
                        <p class="mb-1 fw-bold">{{ $Artikel[3]->judul_artikel }}</p>
                        <p>{{ $Artikel[3]->subjudul_artikel }}</p>
                    </div>
                </a>
            @endif
    </div>
</section>

{{-- <section class="container" style="height: max-content;
        margin-top: 12.5rem;">
    <div class="grid-container href-artikel">
        <a href="/artikel" class="grid-item item1 mt-3 la__image">
            <img class="img-fluid" src="../img/artikel-kami-img.png" alt="">
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

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"> -->
<!-- </script> -->

@section('custom_script')

<script>
    // var url = window.location.href;
    $(document).ready(function (e) {
    $('.home_button').click();
    });

      // BUTTON ACTIVE BY data-filter
      const room  = document.querySelector('.menu');
    const btns = document.querySelectorAll('.menu_btn'); 
    room.addEventListener('click', e => {
        btns.forEach(btn => {
            if(btn.getAttribute('data-filter') === e.target.getAttribute('data-filter'))
            btn.classList.add('active');
            else
            btn.classList.remove('active');
            });
    });
    // SORT TERBARU
    var resultterbaru = "";
    var resultterlaris = "";
    var resulttermurah = "";
    var resulttermahal = "";
    var resultpromo = "";
    var resultstatus = "";

        var sortterbaru = jQuery(".lbblbb").find(".list-barang-barang").toArray().reverse(function(a, b){return parseInt(b.getAttribute('terbaru_count')) - parseInt(a.getAttribute('terbaru_count'))});
            jQuery.each(sortterbaru, function(index, value) {
                jQuery(".lbblbb").append(value);
                console.log(value)
            });
                for (var i = 0; i < (sortterbaru.length > 4 ? 4 : sortterbaru.length); i++) {
            resultterbaru += $(sortterbaru[i]).html();
        }
    // SORT TERLARIS
        var sortterjual = jQuery(".lbblbb").find(".list-barang-barang").toArray().sort(function(a, b){return parseInt(b.getAttribute('terjual_count')) - parseInt(a.getAttribute('terjual_count'))});
            jQuery.each(sortterjual, function(index, value) {
                jQuery(".lbblbb").append(value);
            });
            for (var i = 0; i < (sortterjual.length > 4 ? 4 : sortterjual.length); i++) {
                resultterlaris += $(sortterjual[i]).html();
            }
    // SORT TERMURAH
        var sorttermurah = jQuery(".lbblbb").find(".list-barang-barang").toArray().sort(function(a, b){return parseInt(a.getAttribute('harga_count')) - parseInt(b.getAttribute('harga_count'))});
        jQuery.each(sorttermurah, function(index, value) {
        jQuery(".lbblbb").append(value);
        });
                for (var i = 0; i < (sorttermurah.length > 4 ? 4 : sorttermurah.length); i++) {
            resulttermurah += $(sorttermurah[i]).html();
        }
    // SORT TERMAHAL
        var sorttermahal = jQuery(".lbblbb").find(".list-barang-barang").toArray().sort(function(a, b){return parseInt(b.getAttribute('harga_count')) - parseInt(a.getAttribute('harga_count'))});
        jQuery.each(sorttermahal, function(index, value) {
        jQuery(".lbblbb").append(value);
        });
                for (var i = 0; i < (sorttermahal.length > 4 ? 4 : sorttermahal.length); i++) {
            resulttermahal += $(sorttermahal[i]).html();
        }
        // SORT SEMUA
        var sortiractive = document.querySelectorAll('[data-status="Active"]');
                for (var i = 0; i < (sortiractive.length > 4 ? 4 : sortiractive.length); i++) {
                    resultstatus += $(sortiractive[i]).html();
                };
        // SORT PROMO
        var sortirpromo = document.querySelectorAll('[data-promosi="Promo"]');
        for (var i = 0; i < (sortirpromo.length > 4 ? 4 : sortirpromo.length); i++) {
            resultpromo += $(sortirpromo[i]).html();
        };
    
    function showterbaru() {
        $("#lbblbb").html(resultterbaru == undefined ? '' : resultterbaru);
    }
    function showterlaris() {
        $("#lbblbb").html(resultterlaris == undefined ? '' : resultterlaris);
    }
    function showtermurah() {
        $("#lbblbb").html(resulttermurah == undefined ? '' : resulttermurah);
    }
    function showtermahal() {
        $("#lbblbb").html(resulttermahal == undefined ? '' : resulttermahal);
    }
    function home() {
        $("#lbblbb").html(resultstatus == undefined ? '' : resultstatus);
    }
    function showpromo() {
        $("#lbblbb").html(resultpromo == undefined ? '' : resultpromo);
        
    }
    
    
     
  
    

</script>

@endsection

{{-- <script>
    $(#lb_filter).on("click", function(){
    $('#list-barang').load(' #list-barang')
    alert('Reloaded')
    });
</script> --}}

@endsection
