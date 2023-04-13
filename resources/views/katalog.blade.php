@extends('layout.main')

<style>
    
    #top_content{
        height: max-content;
        padding: 10% 0 0 0;
    }
    #top_cf{
        background-color: var(--blue-color);
        padding: 2rem 4rem;
        border-radius: 5px;
    }
    .tc_content{
        height: 13rem;
    }
    .tc_content p{
        color: #EE9D00;
    }
    .scrolling{
        text-decoration: none;
    }
    #next_scroll{
        height: max-content;
        padding: 5rem 0;
    }
    .tj{
        text-align: justify
    }
    .vl {
        -ms-transform: translate(9px,0); /* Internet Explorer 9 */
        -webkit-transform: translate(9px,0); /* Safari */
        transform: translate(9px,0); /* Syntax Standart */	
        border-left: 2px solid white;
        height: 2rem;
    }
    .content_barang{
        background-color: #f0f0f0;
        padding: 2rem 4rem 2rem 0;
    }
    .content_barang h2{
        color: #EE9D00;
    }
    .content_barang h3{
        color: var(--blue-color);
    }
    .img__lampu{
        /* height: 20%; */
        align-items: flex-end;
    }
    .menu .menu_btn{
        border: 1px solid rgb(187, 186, 186);
        padding: .3rem 1.5rem;
        border-radius: 20px;
    }
    .menu .menu_btn:hover{
        border: 1px solid rgb(187, 186, 186);
        border-radius: 20px;
        background: #19376D;
        font-weight: bold;
        color: white;
    }
    .card a{
        text-decoration: none;
        color: var(--blue-color);
    }
    .hovering__left{
        border-radius: 0 0 10px 10px
    }
    .hovering__right{
        border-radius: 0 0 10px 10px
    }
    .hovering__left h2{
        font-size: .75rem;
    }
    .card__title .fw-bold{
        color: var(--blue-color);
    }
    
    .pagination {
        list-style: none;
        display: inline-block;
        padding: 0;
        margin-top: 10px;
    }
    .pagination li {
        display: inline;
        text-align: center;
    }
    .pagination a {
        float: left;
        display: block;
        font-size: 14px;
        text-decoration: none;
        padding: 10px 18px;
        color: #fff;
        margin-left: -1px;
        border: 1px solid transparent;
        line-height: 1.5;
    }
    .pagination a.active {
        cursor: default;
    }
    .pagination a:active {
        outline: none;
    }
    .modal-1 a {
        border-radius: 6px;
        border-color: #ddd;
        color: #134B6E;
        font-weight: bold;
        font-size: 1rem;
        background: #fff;
    }
    .modal-1 a:hover {
        background: #eee;
    }
    .modal-1 a.active, .modal-1 a:active {
        border-color: #134B6E;
        background: #134B6E;
        color: #fff;
    }

    #slider {
        position: relative;
        overflow: hidden;
        margin: 20px auto 0 auto;
        border-radius: 4px;
    }

    #slider ul {
        position: relative;
        margin: 0;
        padding: 0;
        height: 200px;
        list-style: none;
    }

    #slider ul li {
        position: relative;
        display: block;
        float: left;
        margin: 0;
        padding: 0;
        width: 75%;
        height: 300px;
        background: #ccc;
        text-align: center;
        line-height: 300px;
    }

    a.control_prev, a.control_next {
        position: absolute;
        top: 45%;
        z-index: 999;
        display: block;
        padding: 4% 3%;
        width: auto;
        height: 20px;
        background: #2a2a2a;
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        font-size: 18px;
        opacity: 0.8;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    a.control_prev:hover, a.control_next:hover {
        opacity: 1;
        -webkit-transition: all 0.2s ease;
    }

    a.control_prev {
        border-radius: 200px;
    }

    a.control_next {
        right: 0;
        border-radius:200px;
    }

    .slider_option {
        position: relative;
        margin: 10px auto;
        width: 160px;
        font-size: 18px;
    }

    .hl{ 
        border:         none;
        border-left:    1px solid hsla(200, 10%, 50%,100);
        height:         1.25rem;
        width:          1px;       
    }

    .status a{
        text-decoration: none;
    }
    /* .pagination {
        --bs-pagination-padding-x: 0.75rem;
        --bs-pagination-padding-y: 0.375rem;
        --bs-pagination-font-size: 1rem;
        --bs-pagination-color: var(--bs-link-color);
        --bs-pagination-bg: #fff;
        --bs-pagination-border-width: 1px;
        --bs-pagination-border-color: #dee2e6;
        --bs-pagination-border-radius: 0.375rem;
        --bs-pagination-hover-color: var(--bs-link-hover-color);
        --bs-pagination-hover-bg: #e9ecef;
        --bs-pagination-hover-border-color: #dee2e6;
        --bs-pagination-focus-color: var(--bs-link-hover-color);
        --bs-pagination-focus-bg: #e9ecef;
        --bs-pagination-focus-box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
        --bs-pagination-active-color: #fff;
        --bs-pagination-active-bg: #134B6E;
        --bs-pagination-active-border-color: #134B6E;
        --bs-pagination-disabled-color: #6c757d;
        --bs-pagination-disabled-bg: #fff;
        --bs-pagination-disabled-border-color: #dee2e6;
        display: flex;
        padding-left: 0;
        list-style: none;
    } */
</style>

@section('content')
    <div class="container" id="top_content">
        <div class="container-fluid" id="top_cf">
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
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
                    <div class="col-md-3 d-flex justify-content-end img__lampu"><img src="{{asset('../img/figma-lampu-1.png')}}" alt=""></div>
                    <div class="col-md-3 d-flex justify-content-end"><img src="{{asset('../img/figma-lemari-1.png')}}" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex align-items-center" id="next_scroll">
        <div class="row d-flex">
            <div class="col-md-6 content_barang d-flex align-items-center">
                <div class="row d-flex align-items-center">
                    <div class="col-md-5 barang__kiri"><img src="{{asset('../img/kursi-nyaman.png')}}" width="100%" alt=""></div>
                    <div class="col-md-7">
                        <h3 class="fw-light"><u>KURSI <span class="fw-bold">NYAMAN</span></u></h3>
                        <p class="tj">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae?</p>
                        <h2 class=" fw-bold">RP. 5.399.000</h2>
                        <div class="sd fs-5 d-flex gap-2 justify-content-end">
                            <a class="text-decoration-none text-black" href="">Lihat</a>
                            <a class="text-decoration-none text-black fw-bold" href="">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 content_barang d-flex align-items-center">
                <div class="row d-flex align-items-center">
                    <div class="col-md-7">
                        <h3 class="fw-light"><u>MEJA <span class="fw-bold">FLEXIBEL</span></u></h3>
                        <p class="tj">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae?</p>
                        <h2 class=" fw-bold">RP. 5.399.000</h2>
                        <div class="sd fs-5 d-flex gap-2 justify-content-start">
                            <a class="text-decoration-none text-black" href="">Lihat</a>
                            <a class="text-decoration-none text-black fw-bold" href="">Detail</a>
                        </div>
                    </div>
                    <div class="col-md-5 barang__kanan"><img src="{{asset('../img/meja-flexibel.png')}}" width="100%" alt=""></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class="col-md-2 col-12 text-center text-md-left">
                <h3 class="fw-bold mb-0">FURNITURES</h3>
            </div>
            <div class="col-md-10 menu d-flex gap-3 flex-wrap">
                <a class="btn menu_btn" href="#" role="button">Semua</a>
                <a class="btn menu_btn" href="#" role="button">Meja</a>
                <a class="btn menu_btn" href="#" role="button">Kursi</a>
                <a class="btn menu_btn" href="#" role="button">Lampu</a>
                <a class="btn menu_btn" href="#" role="button">Sofa</a>
                <a class="btn menu_btn" href="#" role="button">Kasur</a>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-0">
                    <div href="">
                        <div class="card__img d-flex justify-content-center align-items-center py-5">
                            <img src="{{asset('../img/11.png')}}" width="75%" alt="">
                        </div>
                        <div class="hovering d-flex justify-content-between">
                            <div class="hovering__left d-flex align-items-center justify-content-center gap-2 px-3 py-3" style="width: 75%; background-color: #19376D">
                                <i class="fa-solid fa-cart-shopping" style="color: #ffffff;"></i>
                                <h2 class="text-white mb-0">Masukkan Keranjang</h2>
                            </div>
                            <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 23%; background-color: #19376D">
                                <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                            </div>
                        </div>
                        <div class="card__title">
                            <p class="fs-5 mb-1 mt-3">MICKE</p>
                            <p class="fs-5 mb-1 fw-bold">Rp.555.000</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-12 d-flex justify-content-center align-items-center">
                <nav aria-label="...">
                    <ul class="pagination pagination-sm d-flex gap-5 mb-0">
                      <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
            </div> --}}
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

    <div class="container">
        <div class="col-md-12">
            <div id="slider" style="width: 100vw;">
                <a class="control_next">></a>
                <a class="control_prev"><</a>
                <ul>
                  <li>
                    <div class="row">
                        <div class="col-md-6">
                            <h1><span>Gaya Baru</span>Sofa Modern</h1>
                            <a href=""><span>Lihat</span> Selengkapnya</a>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('../img/kursi-nyaman.png')}}" width="100%" alt="">
                        </div>
                    </div>
                  </li>
                  <li style="background: #aaa;">SLIDE 2</li>
                  <li>SLIDE 3</li>
                  <li style="background: #aaa;">SLIDE 4</li>
                </ul>  
              </div>
              
              <div class="slider_option">
                <input type="checkbox" id="checkbox">
                <label for="checkbox">Autoplay Slider</label>
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
        <div class="row mt-5 px-4 d-flex justify-content-between">
            <div class="col-md-4 mt-3">
                <div class="row">
                    <div class="col-md-6 py-3 px-2 d-flex align-items-center justify-content-center" style="background-color: rgb(241, 241, 241)">
                        <img src="{{asset('../img/lemari-coklat.png')}}" width="70%" alt="">
                    </div>
                    <div class="col-md-6 fs-5 pl-5">
                        <p class="mb-0 ">MICKE</p>
                        <span class="fw-bold" style="color: #134B6E">RP.555.000</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>

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

    </script>
@endsection