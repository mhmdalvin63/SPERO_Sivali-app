@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/katalog.css')}}">
<style>
    .sdfm-overlay {
        display: none !important;
    }

    .sdfm-wrapper {
        vertical-align: top;
        /* display: block; */
        margin: 0;
    }

    .sdfm-inner-wrapper {
        /* width: 25% !important; */
        height: unset !important;
        transition:none !important;
        float: left;
        display: inline-block;
        padding: 0px;
        position: relative;
        border: none!important;
        margin: 10px;
        cursor: pointer;
    }
    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 440px) {
        .sdfm-inner-wrapper {
            width: 39vw !important;
        }
    }
    @media only screen and (min-width: 441px) and (max-width: 489px) {
        .sdfm-inner-wrapper {
            width: 40.5vw !important;
        }
    }
    @media only screen and (min-width: 490px) and (max-width: 600px) {
        .sdfm-inner-wrapper {
            width: 41vw !important;
        }
    }
    /* @media only screen and (max-width: 600px){
        .sdfm-inner-wrapper {
                width: 41.5vw !important;
        }
    } */
    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px){
        .sdfm-inner-wrapper {
                width: 45% !important;
            }
    }
    /* Medium devices (landscape tablets, 768px and up) */
    @media only screen and (min-width: 768px) {
        .sdfm-inner-wrapper {
            width: 22% !important;
        }
    }
    /* Large devices (laptops/desktops, 992px and up) */
    @media only screen and (min-width: 992px) {
        .sdfm-inner-wrapper {
            width: 22.8% !important;
        }
    }
    /* Extra large devices (large laptops and desktops, 1200px and up) */
    @media only screen and (min-width: 1200px) {
        .sdfm-inner-wrapper {
            width: 23% !important;
        }
    }

</style>

@section('content')
<div class="container" id="top_content">
    <div id="top_cf">
        <div class="content">
            <div class="row" id="grid-header">
                <div class="col-md-6 gh_left">
                    <div class="tc_content mt-5">
                        <h1 class="text-white fw-light"><span class="fw-bold">SIVALI</span> #1 WEBSITE FURNITURE
                            TERPERCAYA</h1>
                        <p class="text-warning">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, iure.
                        </p>
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
    <div class="row" id="prnt_contentbrg" style="width: 100%;">
        @foreach ($barangrandomkiri->take(1) as $item)
        <div class="col-md-12 col-lg-6 col-sm-12 gns1 content_barang d-flex align-items-center">
            <div class="produk d-grid d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center justify-content-around"
                style="width: 100%">
                <div class=" barang__kiri" id="gambar_barang">
                    <img src="{{$item->file_location.'/'.$item->file_hash}}" title="{{$item->file_name}}" alt=""
                        style="width: 100%;height: 100%; object-fit: contain; aspect-ratio: 2/2;">
                    {{-- <img src="{{asset('../img/kursi-nyaman.png')}}" width="100%" alt=""> --}}
                </div>
                <div class="" id="desc_barang">
                    <div class="judul__barang">
                        <h3 class="fw-light" style="text-decoration: none; font-weight:bold">{{$item->judul_barang}}
                        </h3>
                        {{-- <h3 class="fw-light">KURSI <span class="fw-bold">NYAMAN</span></h3> --}}
                    </div>
                    <p class="tj">{{$item->deskripsi}}</p>
                    <h2 class="harga fw-bold">
                        @if ($item->harga_diskon==null)
                        <span class="fw-bold"
                            style="overflow-wrap: break-word;">Rp.{{ number_format($item->harga_asli, 2, ',', '.') }}</span>
                        {{-- <span class="fw-bold" style="font-size: .75rem; visibility: hidden;">Rp.{{ number_format($item->harga_diskon, 2, ',', '.') }}</span>
                        --}}
                        @else
                        {{-- <span class="fw-bolder" style="font-size: .75rem; text-decoration: line-through; color: red;">Rp.{{ number_format($item->harga_asli, 2, ',', '.') }}</span>
                        --}}
                        <span class="fw-bold"
                            style="overflow-wrap: break-word;">Rp.{{ number_format($item->harga_diskon, 2, ',', '.') }}</span>
                        @endif
                    </h2>
                    <a href="{{ route('detail_barang', $item->id)}}" style="text-decoration: none;">
                        <div class="sd fs-5 d-flex gap-2">
                            <P class="text-decoration-none text-black">Lihat <span class="fw-bold">Detail</span></P>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
        @foreach ($barangrandomkanan->take(1) as $item)
        <div class="col-md-12 col-lg-6 col-sm-12 gns2 content_barang d-flex align-items-center">
            <div class=" produk d-grid d-sm-flex d-md-flex d-lg-flex d-xl-flex align-items-center justify-content-around"
                style="width: 100%">
                <div class="" id="desc_barang">
                    <div class="judul__barang">
                        <h3 class="fw-light" style="text-decoration: none; font-weight:bold">{{$item->judul_barang}}
                        </h3>
                        {{-- <h3 class="fw-light">MEJA <span class="fw-bold">FLEXIBEL</span></h3> --}}
                    </div>
                    <p class="tj">{{$item->deskripsi}}</p>
                    <h2 class="harga fw-bold">
                        @if ($item->harga_diskon==null)
                        <span class="fw-bold"
                            style="overflow-wrap: break-word;">Rp.{{ number_format($item->harga_asli, 2, ',', '.') }}</span>
                        {{-- <span class="fw-bold" style="font-size: .75rem; visibility: hidden;">Rp.{{ number_format($item->harga_diskon, 2, ',', '.') }}</span>
                        --}}
                        @else
                        {{-- <span class="fw-bolder" style="font-size: .75rem; text-decoration: line-through; color: red;">Rp.{{ number_format($item->harga_asli, 2, ',', '.') }}</span>
                        --}}
                        <span class="fw-bold"
                            style="overflow-wrap: break-word;">Rp.{{ number_format($item->harga_diskon, 2, ',', '.') }}</span>
                        @endif
                    </h2>
                    <a href="{{ route('detail_barang', $item->id)}}" style="text-decoration: none;">
                        <div class="sd fs-5 d-flex gap-2">
                            <P class="text-decoration-none text-black">Lihat <span class="fw-bold">Detail</span></P>
                        </div>
                    </a>

                </div>
                <div class=" barang__kanan" id="gambar_barang">
                    <img src="{{$item->file_location.'/'.$item->file_hash}}" title="{{$item->file_name}}" alt=""
                        style="width: 100%;height: 100%; object-fit: contain;aspect-ratio: 2/2;">
                    {{-- <img src="{{asset('../img/meja-flexibel.png')}}" width="100%" alt=""> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container mb-5" id="list_katalog">
    <div class="row d-flex align-items-center">
        <div class="col-md-4 col-lg-2 col-12 text-center text-md-left">
            <h3 class="fw-bold mb-0">FURNITURES</h3>
        </div>
        <div id="menu" class="col-md-8 col-lg-10 mt-3 mt-lg-0 menu d-flex gap-3 flex-wrap justify-content-center">
            <button class="btn menu_btn sorter" role="button" data-filter="*">Semua</button>
            @foreach ($kategoriBarang as $item)
            <button class="btn menu_btn sorter" role="button"
                data-filter="filter-{{$item->id}}">{{$item->kategori_barang}}</button>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <ul class=" mt-5" id="sort-me">
                @foreach ($barang as $key => $item)
                <li class="mt-5 filter-{{$item->id_kategori}}" data-title="{{$key}}" data-order="{{$key}}">
                    <div class="card border-0" id="lb_barang">
                        @if ($item->promosi=='Promo')
                        <div class="label" style="background-color: red;">
                            <p class="mb-0">Promo</p>
                        </div>
                        @elseif($item->promosi=='Baru')
                        <div class="label" style="background-color: green;">
                            <p class="mb-0">Baru</p>
                        </div>
                        @elseif($item->promosi=='Terlaris')
                        <div class="label" style="background-color: blue;">
                            <p class="mb-0">Terlaris</p>
                        </div>
                        @endif
                        <a href="{{ route('detail_barang', $item->id)}}" style="text-decoration: none;">
                            <div>
                                <div class="card__img d-flex justify-content-center align-items-center">
                                    <img src="{{$item->file_location.'/'.$item->file_hash}}" title="{{$item->file_name}}"
                                        alt="">
                                </div>
                                <div class="card__title">
                                    <p class="mb-1 mt-3 text-black">{{$item->judul_barang}}</p>
                                    <div class="harga_bawah" style="width: 100%; overflow: hidden; text-overflow: ellipsis;">
                                        @if ($item->harga_diskon==null)
                                        <p class="mb-1 fw-bold" style="width: 100%;
                                                overflow: hidden;
                                                text-overflow: ellipsis;">
                                            Rp.{{ number_format($item->harga_asli, 2, ',', '.') }}</p>
                                        <p class=" mb-1 fw-bold" style="font-size: .75rem; visibility: hidden;
                                                ">Rp.{{ number_format($item->harga_diskon, 2, ',', '.') }}</p>
                                        @else
                                        <p class="mb-1 fw-bolder" style="font-size: .75rem; text-decoration: line-through; color: red;
                                                width: 100%;
                                                overflow: hidden;
                                                text-overflow: ellipsis;">
                                            Rp.{{ number_format($item->harga_asli, 2, ',', '.') }}</p>
                                        <p class="mb-1 fw-bold" style="width: 100%;
                                                overflow: hidden;
                                                text-overflow: ellipsis;">
                                            Rp.{{ number_format($item->harga_diskon, 2, ',', '.') }}</p>
                                        @endif
                                        <div class="stok_terjual d-flex justify-content-between">
                                            <p class="mb-3 text-black">Stok : {{ $item->stok }}</p>
                                            <p class="mb-3 text-black">{{ $item->terjual }} terjual</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
        
                        <div class="hovering d-flex justify-content-around">
                            <div class="hovering__left d-flex align-items-center justify-content-center px-3 py-3">
                                <i class="fa-solid fa-comment-dots fa-lg" style="color: #fff"></i>
                            </div>
                            {{-- <div class="hovering__right d-flex justify-content-center align-items-center" style="width: 30%;">
                                        <i class="fa-solid fa-cart-shopping fa-lg" style="color: #fff;"></i>
                                    </div> --}}
                            <div class="hovering__right d-flex justify-content-center align-items-center px-3 py-3">
                                <a href="{{ route('favorit_barang', $item->id)}}#list_barang">
                                    <i class="fa-regular fa-heart fa-lg" style="color: #fff;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>   
        </div>
    </div>
    
    <div class="d-flex justify-content-center">
        {{ $barang->links('vendor.pagination.bootstrap-5') }}
    </div>
</div>


<div class="container mt-5" id="carousel">
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
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

</div>
</div>


<div class="container mt-5" id="bottom_lb">
    <div class="row">
        <div class="status col d-flex gap-3 align-items-center fs-5">
            <a href="" class="text-black">LAKU <span class="fw-bold">TERJUAL</span></a>
            <div class="hl"></div>
            <a href="" class="fw-bold text-black">READY STOK</a>
        </div>
    </div>
    <div class="row px-3 d-flex justify-content-between justify-content-xl-start">
        @foreach ($allbarang as $item)
        <div class="col-xl-4 col-5 col-md-6 mt-5">
            <a href="{{ route('detail_barang', $item->id)}}" style="text-decoration: none;">
                <div class="row">
                    <div class="col-md-6 py-3 px-2 d-flex align-items-center justify-content-center" id="pbi">
                        {{-- <img src="{{$item->file_location.'/'.$item->file_hash}}" title="{{$item->file_name}}"
                        alt="" width="75"> --}}
                        <img src="{{$item->file_location.'/'.$item->file_hash}}" title="{{$item->file_name}}" alt=""
                            style="width: 100%;height: 100%; object-fit: contain;">
                    </div>
                    <div class="r_desc col-md-6 fs-5 pl-5 ">
                        <p class="mb-0 text-black">{{$item->judul_barang}}</p>
                        {{-- <span class="fw-bold" style="color: #134B6E">Rp.{{ number_format($item->harga, 2, ',', '.') }}</span>
                        --}}
                        <div class="harga_bawah" style="width: 100%;
                                overflow: hidden;
                                text-overflow: ellipsis;">
                            @if ($item->harga_diskon==null)
                            <span class="fw-bold"
                                style="color: #19376D;">Rp.{{ number_format($item->harga_asli, 2, ',', '.') }}</span>
                            <span class="fw-bold"
                                style="font-size: .75rem; visibility: hidden;">Rp.{{ number_format($item->harga_diskon, 2, ',', '.') }}</span>
                            @else
                            <span class="fw-bolder"
                                style="font-size: .75rem; text-decoration: line-through; color: red;">Rp.{{ number_format($item->harga_asli, 2, ',', '.') }}</span>
                            <span class="fw-bold"
                                style="color: #19376D;">Rp.{{ number_format($item->harga_diskon, 2, ',', '.') }}</span>
                            @endif
                            <div class="stok_terjual d-flex justify-content-between">
                                <p class="mb-3 text-black">Stok : {{ $item->stok }}</p>
                                <p class="mb-3 text-black">{{ $item->terjual }} terjual</p>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<script type="text/javascript">
</script>


@endsection
