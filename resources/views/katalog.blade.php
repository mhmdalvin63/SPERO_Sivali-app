@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/katalog.css')}}">

@section('content')
    <div class="container" id="top_content">
        <div id="top_cf">
            <div class="content">
                <div class="row" id="grid-header">
                    <div class="col-md-6 gh_left">
                        <div class="tc_content mt-5">
                            <h1 class="text-white fw-light"><span class="fw-bold">SIVALI</span> #1 WEBSITE FURNITURE TERPERCAYA</h1>
                            <p class="text-warning">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, iure.</p>
                        </div>
                        <a href="#next_scroll" class="scrolling">
                            <p class="text-white fs-4 mb-1">LIHAT <b>LEBIH</b></p>
                            <div class="vl"></div>
                            <i class="fa-solid fa-circle-chevron-down fa-lg mt-3" style="color: #000;"></i>
                        </a>
                    </div>
                    <div class="img__lampu gh_right1"><img src="{{asset('../img/figma-lampu-1.png')}}" alt=""></div>
                    <div class="col-md-6 gh_right2"><img src="{{asset('../img/figma-lemari-1.png')}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex align-items-center" id="next_scroll">
        <div class="row" id="prnt_contentbrg">
            <div class="col-md-12 col-lg-6 col-sm-12 gns1 content_barang d-flex align-items-center">
                <div class="row produk d-grid d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center">
                    <div class="col-md-5 col-sm-6 barang__kiri" id="gambar_barang">
                        <img src="{{asset('../img/kursi-nyaman.png')}}" width="100%" alt="">
                    </div>
                    <div class="col-md-7 col-sm-6" id="desc_barang">
                        <div class="judul__barang">
                            <h3 class="fw-light">KURSI <span class="fw-bold">NYAMAN</span></h3>
                        </div>
                        <p class="tj">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae?</p>
                        <h2 class="harga fw-bold">RP. 5.399.000</h2>
                        <div class="sd fs-5 d-flex gap-2">
                            <a class="text-decoration-none text-black" href="">Lihat</a>
                            <a class="text-decoration-none text-black fw-bold" href="">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 col-sm-12 gns2 content_barang d-flex align-items-center">
                <div class="row produk d-grid d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center">
                    <div class="col-md-7 col-sm-6" id="desc_barang">
                        <div class="judul__barang">
                            <h3 class="fw-light">MEJA <span class="fw-bold">FLEXIBEL</span></h3>
                        </div>
                        <p class="tj">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae?</p>
                        <h2 class="harga fw-bold">RP. 5.399.000</h2>
                        <div class="sd fs-5 d-flex gap-2">
                            <a class="text-decoration-none text-black" href="">Lihat</a>
                            <a class="text-decoration-none text-black fw-bold" href="">Detail</a>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-6 barang__kanan" id="gambar_barang">
                        <img src="{{asset('../img/meja-flexibel.png')}}" width="100%" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-4 col-lg-2 col-12 text-center text-md-left">
                <h3 class="fw-bold mb-0">FURNITURES</h3>
            </div>
            <div id="menu" class="col-md-8 col-lg-10 mt-3 mt-lg-0 menu d-flex gap-3 flex-wrap justify-content-center">
                <a class="btn menu_btn" href="{{ URL::current() }}" role="button">Semua</a>
                @foreach ($kategoriBarang as $item) 
                    <a class="btn menu_btn" href="{{ URL::current()."?sort".'='.$item->id}}" role="button">{{$item->kategori_barang}}</a>
                @endforeach
            </div>
        </div>

        <div class="row mt-5" id="list_barang">
            @foreach ($barang as $item) 
            <div class="col-md-3 col-sm-4">
                <div class="card border-0" id="lb_barang">
                    <div class="label">
                        <p class="mb-0">Baru</p>
                    </div>
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{$item->file_location.'/'.$item->file_hash}}" title="{{$item->file_name}}" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 30%;">
                                <i class="fa-solid fa-comment-dots fa-lg" style="color: #fff"></i>
                                {{-- <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2> --}}
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 30%;">
                                <i class="fa-solid fa-cart-shopping fa-lg" style="color: #fff;"></i>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 30%;">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">{{$item->judul_barang}}</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.{{ number_format($item->harga, 2, ',', '.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-md-12 d-flex justify-content-center mt-5">
                <ul class="pagination modal-1 gap-3">
                    {{-- <li><a href="#" class="prev">&laquo</a></li> --}}
                    <li><a href="#" class="active">1</a></li>
                    <li> <a href="#">2</a></li>
                    <li> <a href="#">3</a></li>
                    {{-- <li> <a href="#">4</a></li>
                    <li> <a href="#">5</a></li>
                    <li> <a href="#">6</a></li>
                    <li> <a href="#">7</a></li>
                    <li> <a href="#">8</a></li>
                    <li> <a href="#">9</a></li> --}}
                    {{-- <li><a href="#" class="next">&raquo;</a></li> --}}
                </ul>
            </div>
        </div>
    </div>

    
    <div class="container" id="carousel">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="slider">
              <div class="carousel-item d-grid active">
                <div class="ci_image">
                  <img src="{{asset('../img/figma-lampu-1.png')}}" alt="...">
                </div>
                <div class="ci_desc text-black">
                  <p class="fw-bold">Gaya Baru <span class="fw-light">Kursi Modern</span></p>
                  <a href="" class="fw-bold text-black">Lihat <span class="fw-light">Selengkapnya</span></a>
                </div>
              </div>
              <div class="carousel-item d-grid">
                <div class="ci_image">
                  <img src="{{asset('../img/figma-lemari-1.png')}}" alt="...">
                </div>
                <div class="ci_desc text-black">
                  <p class="fw-bold">Gaya Baru <span class="fw-light">Lemari Modern</span></p>
                  <a href="" class="fw-bold text-black">Lihat <span class="fw-light">Selengkapnya</span></a>
                </div>
              </div>
            </div>
        </div>
        
        <div class="next_prev">
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
    </div>
</div>
    </div>


    <div class="container mt-5">
        <div class="row mb-5">
            <div class="status col d-flex gap-3 align-items-center fs-5">
                <a href="" class="text-black">LAKU <span class="fw-bold">TERJUAL</span></a>
                <div class="hl"></div>
                <a href="" class="fw-bold text-black">READY STOK</a>
            </div>
        </div>
        <div class="row mt-5 px-4 d-flex justify-content-center justify-content-md-start">
           @foreach ($barang as $item)
            <div class="col-md-4 col-5 mt-3">
                <div class="row">
                    <div class="col-md-6 py-3 px-2 d-flex align-items-center justify-content-center" style="background-color: rgb(241, 241, 241);height: 12.5rem;">
                        {{-- <img src="{{$item->file_location.'/'.$item->file_hash}}" title="{{$item->file_name}}" alt="" width="75"> --}}
                        <img src="{{$item->file_location.'/'.$item->file_hash}}" title="{{$item->file_name}}" alt="" style="width: 100%;height: auto;">
                    </div>
                    <div class="r_desc col-md-6 fs-5 pl-5 ">
                        <p class="mb-0 ">{{$item->judul_barang}}</p>
                        <span class="fw-bold" style="color: #134B6E">Rp.{{ number_format($item->harga, 2, ',', '.') }}</span>
                    </div>
                </div>
            </div>
           @endforeach
        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {

        $('#checkbox').change(function(){
        setInterval(function () {
            moveRight();
        }, 3000);
        });

        var slideCount = $('#slider ul li').length;
        var slideWidth = $('#slider ul li').width();
        var slideHeight = $('#slider ul li').height();
        var sliderUlWidth = slideCount * slideWidth;
        
        $('#slider').css({ width: slideWidth, height: slideHeight });
        
        $('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
        
        $('#slider ul li:last-child').prependTo('#slider ul');

        function moveLeft() {
            $('#slider ul').animate({
                left: + slideWidth
            }, 200, function () {
                $('#slider ul li:last-child').prependTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        };

        function moveRight() {
            $('#slider ul').animate({
                left: - slideWidth
            }, 200, function () {
                $('#slider ul li:first-child').appendTo('#slider ul');
                $('#slider ul').css('left', '');
            });
        };

        $('a.control_prev').click(function () {
            moveLeft();
        });

        $('a.control_next').click(function () {
            moveRight();
        });

        });    

    </script> --}}
@endsection