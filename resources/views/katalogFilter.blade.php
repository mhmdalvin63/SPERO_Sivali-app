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

    #list_barang{
        margin-top: 0 !important;
        height: max-content;
        transform: none !important;
    }
</style>
@section('content')
<section id="list_barang" class="container" style="height: max-content;
        transform: translateY(10rem);">
    {{-- <h1 class="text-center fw-bold">Kategori {{$KategoriBarangfilter->kategoriBarang->kategori_barang}}</h1> --}}
    <h1 class="text-center fw-bold"></h1>
    <div class="menu d-flex gap-2 flex-wrap justify-content-center mt-5">
        <button id="lb_filter" data-filter="home" onclick="home()" class="btn menu_btn" role="button">Semua</button>
        <button id="lb_filter" data-filter="Terbaru" onclick="showterbaru()" class="btn menu_btn" role="button">Terbaru</button>
        <button id="lb_filter" data-filter="Terlaris" onclick="showterlaris()" class="btn menu_btn" role="button">Terlaris</button>
        <button id="lb_filter" onclick="showtermurah()" data-filter="Termurah" class="btn menu_btn" role="button">Termurah</button>
        <button id="lb_filter" onclick="showtermahal()" data-filter="Termahal" class="btn menu_btn" role="button">Termahal</button>
        <button id="lb_filter" data-filter="Promo" onclick="showpromo()"
            class="btn menu_btn"
            role="button">Promo</button>
    </div>
   <div class="row">
    <div class="col-md-12">
        <div class="row lbblbb mt-5" id="lbblbb">
           @foreach ($KategoriBarangfilter as $item)
           {{-- <div class="col-md-4 col-lg-3 col-12 col-sm-6 mt-4 list-barang-barang" id="home_list_barang" --}}
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
    {{-- <a class="d-block fs-5 mt-3 text-end fw-bold text-decoration-none" href="/katalog" role="button">Selengkapnya >></a> --}}
</section>

<!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"> -->
</script>
<script>
    // SORT TERBARU
        var sortterbaru = jQuery(".lbblbb").find(".list-barang-barang").toArray().sort(function(a, b){return parseInt(b.getAttribute('terbaru_count')) - parseInt(a.getAttribute('terbaru_count'))});
            jQuery.each(sortterbaru, function(index, value) {
                jQuery(".lbblbb").append(value);
            });
                var resultterbaru = "";
                for (var i = 0; i < sortterbaru.length; i++) {
            resultterbaru += sortterbaru[i].innerHTML;
        }
    // SORT TERLARIS
        var sortterjual = jQuery(".lbblbb").find(".list-barang-barang").toArray().sort(function(a, b){return parseInt(b.getAttribute('terjual_count')) - parseInt(a.getAttribute('terjual_count'))});
            jQuery.each(sortterjual, function(index, value) {
                jQuery(".lbblbb").append(value);
            });
                var resultterlaris = "";
                for (var i = 0; i < sortterjual.length; i++) {
            resultterlaris += sortterjual[i].innerHTML;
        }
    // SORT TERMURAH
        var sorttermurah = jQuery(".lbblbb").find(".list-barang-barang").toArray().reverse(function(a, b){return parseInt(b.getAttribute('harga_count')) - parseInt(a.getAttribute('harga_count'))});
        jQuery.each(sorttermurah, function(index, value) {
        jQuery(".lbblbb").append(value);
        });
        var resulttermurah = "";
                for (var i = 0; i < sorttermurah.length; i++) {
            resulttermurah += sorttermurah[i].innerHTML;
        }
    // SORT TERMAHAL
        var sorttermahal = jQuery(".lbblbb").find(".list-barang-barang").toArray().sort(function(a, b){return parseInt(b.getAttribute('harga_count')) - parseInt(a.getAttribute('harga_count'))});
        jQuery.each(sorttermahal, function(index, value) {
        jQuery(".lbblbb").append(value);
        });
        var resulttermahal = "";
                for (var i = 0; i < sorttermahal.length; i++) {
            resulttermahal += sorttermahal[i].innerHTML;
        }
    // SORT PROMO
    const sortirpromo = document.querySelectorAll('[data-promosi="Promo"]');
        var resultpromo = "";
            for (var i = 0; i < sortirpromo.length; i++) {
            resultpromo += sortirpromo[i].innerHTML;
        }
    // SORT HOME ACTIVE
    const sortiractive = document.querySelectorAll('[data-status="Active"]');
        var resultstatus = "";
            for (var i = 0; i < sortiractive.length; i++) {
            resultstatus += sortiractive[i].innerHTML;
        }
    
    function showterbaru() {
        document.getElementById("lbblbb").innerHTML = resultterbaru;
    }
    function showpromo() {
        document.getElementById("lbblbb").innerHTML = resultpromo;
    }
    function showterlaris() {
        document.getElementById("lbblbb").innerHTML = resultterlaris;
    }
    function showtermurah() {
        document.getElementById("lbblbb").innerHTML = resulttermurah;
    }
    function showtermahal() {
        document.getElementById("lbblbb").innerHTML = resulttermahal;
    }
    function home() {
        document.getElementById("lbblbb").innerHTML = resultstatus;
    }
     
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
    

</script>
{{-- <script>
    $(#lb_filter).on("click", function(){
    $('#list-barang').load(' #list-barang')
    alert('Reloaded')
    });
</script> --}}

@endsection
