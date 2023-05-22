@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/home.css')}}">
<link rel="stylesheet" href="{{asset('../js/coba.js')}}">

@section('content')
    <div id="top">
        {{-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators"></ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner"></div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div> --}}
       

        <div class="container">
            <div class="" id="carousel">
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="slider">
                        @foreach ($Banner as $key => $item)
                        <a href="{{asset($item->url)}}" target="_blank">
                            <div class="carousel-item {{ $key == 0 ? 'active' : ''}}" id="carousel_img">
                                <img class="img-fluid" src="{{asset('../storage/image/'.'/'.$item->gambar_banner)}}" alt="">
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
       </div>
            <div class="next_prev">
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="fw-bold" style="color: black;">Prev</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="fw-bold" style="color: black;">Next</span>
              </button>
            </div>
        </div>
       {{-- <div class="container-fluid">
        <div class="row row__top">
            <div class="col-md-6 d-flex align-items-center">
                <div class="desc">
                    <h1>Sofa terbaru dengan kualitas terbaik</h1> 
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Amet quis modi eius at quae fugit?</p>
                    <a class="btn btn-primary" href="#" role="button">Beli Sekarang</a>
                </div>
            </div>
            <div class="col-md-6 top__img">
                <img src="{{asset('../img/sofa-home.png')}}" width="110%" alt="">
            </div>
        </div>
       </div> --}}
    </div>

    <div class="container-fluid mb-5" id="kategoribarang">
        <h3 class="mb-5 text-center fw-bold">Kategori Barang</h3>
        <div class="k_b d-flex justify-content-center">
            @foreach ($kategoriBarang as $item)
            <div class="logo">
                <div class="logo__img">
                    <img class="img-fluid" src="{{asset('../storage/image/'.'/'.$item->gambar_kategori)}}" alt="" width="50">
                </div>
                <div class="desc_logo_img">
                <p class="mt-3 text-center">{{$item->kategori_barang}}</p>
                </div>
            </div>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat delectus facere blanditiis voluptatum labore aliquam fuga dicta voluptas vero porro!</p>
                        <a class="btn btn-primary" href="#" role="button">Selengkapnya >></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top: 7rem;height: max-content;
        transform: translateY(9rem);">
        <h1 class="text-center fw-bold">Katalog Kami</h1>
        <div class="menu d-flex gap-2 flex-wrap justify-content-center mt-5">
            <a href="{{ URL::current()}}" class="btn menu_btn" role="button">Semua</a>
            <a href="{{ URL::current()."?sort=terbaru"}}" class="btn menu_btn" role="button">Terbaru</a>
            <a href="{{ URL::current()."?sort=terlaris"}}" class="btn menu_btn" role="button">Terlaris</a>
            <a href="{{ URL::current()."?sort=termurah"}}" class="btn menu_btn" role="button">Termurah</a>
            <a href="{{ URL::current()."?sort=termahal"}}" class="btn menu_btn" role="button">Termahal</a>
            <a href="{{ URL::current()."?sort=promo"}}" class="btn menu_btn" role="button">Promo</a>
        </div>
        <div class="row mt-5">
            @foreach ($barang as $item)
            <div class="col-md-4 col-lg-3 col-12 col-sm-6 mt-4" id="home_list_barang"> 
               <a href="{{ route('detail_barang', $item->id)}}">
                <div class="card" id="product">
                    <div class="top_product">
                        {{-- <img src="{{asset('storage/image/'.'/'.$item->gambar_barang)}}" alt=""> --}}
                        <img src="{{$item->file_location.'/'.$item->file_hash}}" title="{{$item->file_name}}" alt="" width="75">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title text-black">{{$item->judul_barang}}</h5>
                        {{-- <p class="card-text">Rp.{{ number_format($item->harga, 2, ',', '.') }}</p> --}}
                            @if ($item->harga_diskon==null)
                            <p class="card-text fw-bold mb-0" style="font-size: .75rem; visibility: hidden;">Rp.{{ number_format($item->harga_diskon, 2, ',', '.') }}</p>
                                <p class="card-text fw-bold mb-3" style="color: #19376D;">Rp.{{ number_format($item->harga_asli, 2, ',', '.') }}</p>
                            @else
                                <p class="card-text fw-bold mb-0" style="font-size: .75rem; text-decoration: line-through; color: red;">Rp.{{ number_format($item->harga_asli, 2, ',', '.') }}</p>
                                <p class="card-text fw-bold mb-3" style="color: #19376D;">Rp.{{ number_format($item->harga_diskon, 2, ',', '.') }}</p>
                            @endif
                        <div class="rating"> 
                            @if($item->rate <= 0)
                                <i class="fa fa-star" aria-hidden="true"></i>
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
    </div>

    <div class="container" style="height: max-content;
        margin-top: 12.5rem;">
        <div class="grid-container">
                <div class="grid-item item1 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('../img/artikel-kami-img.png')}}" alt="">
                    <div class="overlay">
                        <p class="mb-1 fw-bold">SAMPAI JUMPA DI TOKO</p>
                        <p>Sebelum berkunjung, lihat halaman Toko dan Pick-up Point SIVALI untuk mengetahui informasi seputar penawaran, event dan lainnya.</p>
                    </div>
                </div>
                <div class="grid-item item2 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
                    <div class="overlay">
                        <p class="mb-1">Barang dengan kualitas Terbaik</p>
                    </div>
                </div>
                <div class="grid-item item3 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
                    <div class="overlay">
                        <p class="mb-1">Temukan <br> barang - barang lokal buatan <br> Kota Jepara</p>
                    </div>
                </div>
                <div class="grid-item item4 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
                    <div class="overlay">
                        <p class="mb-1 fw-bold">Semua Jenis Peralatan Dapur</p>
                    </div>
                </div>
                <div class="grid-item item5 mt-3 la__image">
                    <img class="img-fluid" src="{{asset('../img/image-artikel.png')}}" alt="">
                    <div class="overlay">
                        <p class="mb-1 fw-bold">Tipe Dapur Impian Anda Dirumah</p>
                        <p>Temukan semua barangnya hanya di Sivali Furniture</p>
                    </div>
                </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script type="text/javascript">
            $('.slider').each(function() {
        var $this = $(this);
        var $group = $this.find('.slide_group');
        var $slides = $this.find('.slide');
        var bulletArray = [];
        var currentIndex = 0;
        var timeout;
        
        function move(newIndex) {
            var animateLeft, slideLeft;
            
            advance();
            
            if ($group.is(':animated') || currentIndex === newIndex) {
            return;
            }
            
            bulletArray[currentIndex].removeClass('active');
            bulletArray[newIndex].addClass('active');
            
            if (newIndex > currentIndex) {
            slideLeft = '100%';
            animateLeft = '-100%';
            } else {
            slideLeft = '-100%';
            animateLeft = '100%';
            }
            
            $slides.eq(newIndex).css({
            display: 'block',
            left: slideLeft
            });
            $group.animate({
            left: animateLeft
            }, function() {
            $slides.eq(currentIndex).css({
                display: 'none'
            });
            $slides.eq(newIndex).css({
                left: 0
            });
            $group.css({
                left: 0
            });
            currentIndex = newIndex;
            });
        }
        
        function advance() {
            clearTimeout(timeout);
            timeout = setTimeout(function() {
            if (currentIndex < ($slides.length - 1)) {
                move(currentIndex + 1);
            } else {
                move(0);
            }
            }, 4000);
        }
        
        $('.next_btn').on('click', function() {
            if (currentIndex < ($slides.length - 1)) {
            move(currentIndex + 1);
            } else {
            move(0);
            }
        });
        
        $('.previous_btn').on('click', function() {
            if (currentIndex !== 0) {
            move(currentIndex - 1);
            } else {
            move(3);
            }
        });
        
        $.each($slides, function(index) {
            var $button = $('<a class="slide_btn">&bull;</a>');
            
            if (index === currentIndex) {
            $button.addClass('active');
            }
            $button.on('click', function() {
            move(index);
            }).appendTo('.slide_buttons');
            bulletArray.push($button);
        });
        
        advance();
        });
    </script>
@endsection