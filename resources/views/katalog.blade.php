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
        transition: none !important;
        float: left;
        display: inline-block;
        padding: 0px;
        position: relative;
        border: none !important;
        margin: 10px;
        cursor: pointer;
    }

    /* Extra small devices (phones, 600px and down) */
    @media only screen and (max-width: 440px) {
        .sdfm-inner-wrapper {
            width: 42.5% !important;
        }
    }

    @media only screen and (min-width: 441px) and (max-width: 489px) {
        .sdfm-inner-wrapper {
            width: 40.5vw !important;
        }
    }

    @media only screen and (min-width: 490px) and (max-width: 600px) {
        .sdfm-inner-wrapper {
            width: 37.5vw !important;
        }
    }

    /* @media only screen and (max-width: 600px){
        .sdfm-inner-wrapper {
                width: 41.5vw !important;
        }
    } */
    /* Small devices (portrait tablets and large phones, 600px and up) */
    @media only screen and (min-width: 600px) {
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

    .menu.active,
    .btn:hover {
        background-color: #19376D;
    }

</style>

@section('content')
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

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
                <img src="{{asset('img/'.$item->file_name)}}" alt=""
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
                <img src="{{asset('img/'.$item->file_name)}}" alt=""
                        style="width: 100%;height: 100%; object-fit: contain; aspect-ratio: 2/2;">
                    {{-- <img src="{{asset('../img/meja-flexibel.png')}}" width="100%" alt=""> --}}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container mb-5" id="list_katalog">
    <div class="row d-flex align-items-center">
        <div id="menu" class="col-md-8 col-lg-10 mt-3 mt-lg-0 menu d-flex gap-3 flex-wrap">
            <button id="home_button" class="btn menu_btn sorter" role="button" data-filter="*">Semua</button>
            @foreach ($kategoriBarang as $item)
            <button class="btn menu_btn sorter" role="button"
                data-filter="filter-{{$item->id}}">{{$item->kategori_barang}}</button>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <ul class="" id="sort-me">
                @foreach ($barang as $key => $item)
                <li class="mt-5 filter-{{$item->id_kategori}}" data-title="{{$key}}" data-order="{{$key}}">
                    {{-- <li class="mt-5" data-kategori="{{$item->id_kategori}}"> --}}
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
                                <img src="{{asset('img/'.$item->file_name)}}" alt=""
                        style="width: 100%;height: 100%; object-fit: contain; aspect-ratio: 2/2;">
                                </div>
                                <div class="card__title">
                                    <p class="mb-1 mt-3 text-black">{{$item->judul_barang}}</p>
                                    <div class="harga_bawah"
                                        style="width: 100%; overflow: hidden; text-overflow: ellipsis;">
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
                            <div class="hovering__right d-flex justify-content-center align-items-center px-3 py-3">
                                <a href="{{ url('chart', $item->id)}}#list_barang">
                               
                                <i class="fa-solid fa-cart-shopping" style="color: #ffff;"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

    {{-- <div class="d-flex justify-content-center">
        {{ $barang->links('vendor.pagination.bootstrap-5') }}
    </div> --}}
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
        <div class="col-xl-4 col-6 col-sm-6 mt-5">
            <a href="{{ route('detail_barang', $item->id)}}" style="text-decoration: none;">
                <div class="row">
                    <div class="col-md-6 py-3 px-2 d-flex align-items-center justify-content-center" id="pbi">
                        {{-- <img src="{{$item->file_location.'/'.$item->file_hash}}" title="{{$item->file_name}}"
                        alt="" width="75"> --}}
                        <img src="{{asset('img/'.$item->file_name)}}" alt=""
                        style="width: 100%;height: 100%; object-fit: contain; aspect-ratio: 2/2;">
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

<!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"
    integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> -->

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->

<script>
 $(document).ready(function (e) {
        $('#home_button').addClass('active');
});
// var allbarang = JSON.parse("{{ json_encode($allbarang) }}");
// var barang = {!! json_encode($barang) !!};
// const myArr = JSON.parse(barang);
// console.log(barang)

// const sortirkategori = document.querySelectorAll('[data-kategori="Active"]');
//         var resultkategori = "";
//             for (var i = 0; i < sortirkategori.length; i++) {
//             resultkategori += sortirkategori[i].innerHTML;
//         }
    /*!
 jQuery.sdFilterMe v0.1
 (c) 2015 Steve David <http://www.steve-david.com>

 MIT-style license.
 */

    (function ($) {
        $.fn.extend({
            sdFilterMe: function (options) {
                if (options && typeof (options) == 'object') {
                    options = $.extend({}, $.sdFilterMe.defaults, options);
                }

                if ($(this).length == 1) {
                    new $.sdFilterMe(this, options);
                }

                return this;
            }
        });

        $.layout = [];

        $.sdFilterMe = function (el, options) {
            var $el = $(el);

            $(window).on('load', function () {

                $el = $.sdFilterMe.buildLayout(el, options);
                $.layout = $.sdFilterMe.storeCoordinates($el);

                $(window).on('resize', function () {
                    $.layout = $.sdFilterMe.storeCoordinates($el);
                });

                var $boxes = $el.find('> .sdfm-inner-wrapper');

                // Triggering events


                $(options.filterSelector).css('cursor', 'pointer').on('click', function (e) {
                    e.preventDefault();
                    $.sdFilterMe.filterBoxes($el, $(this).attr('data-filter'), options);
                });

                $(options.orderSelector).css('cursor', 'pointer').on('click', function (e) {
                    e.preventDefault();
                    $.sdFilterMe.sortBoxes($boxes, $(this).attr('data-order'), options);
                });

                if (options.hoverEffect) {
                    $.sdFilterMe.hoverEffect($el, options);
                }
            });
        };

        $.sdFilterMe.buildLayout = function (el, options) {

            var $el = $(el),
                $lis = $el.find('> li'),
                widths = [],
                heights = [],
                clones = [],
                maxWidth, maxHeight, outerWrapperId = 'sdfm-wrapper',
                $outerWrapper = $('<div />')
                .attr('id', outerWrapperId)
                .css({
                    'vertical-align': 'top',
                    'display': 'block',
                    'margin': 'auto'
                });


            $el.css({
                'list-style-type': 'none'
            }).wrap($outerWrapper);

            $lis.css({
                // 'display': 'inline-block'
            }).each(function (i) {
                widths[i] = $(this).outerWidth() + options.css.border.width * 2;
                heights[i] = $(this).outerHeight() + options.css.border.width * 2;
                clones[i] = $(this).children().clone();
            });

            maxWidth = Math.max.apply(Math, widths);
            maxHeight = Math.max.apply(Math, heights);

            $wrapper = $('<div />')
                .width(maxWidth)
                .height(maxHeight)
                .css({
                    // Setting transitions
                    // '-webkit-transition': 'all ' + options.duration + 'ms ' + options.animation,
                    // '-moz-transition': 'all ' + options.duration + 'ms ' + options.animation,
                    // '-ms-transition': 'all ' + options.duration + 'ms ' + options.animation,
                    // '-o-transition': 'all ' + options.duration + 'ms ' + options.animation,
                    // 'transition': 'all ' + options.duration + 'ms ' + options.animation,

                    // Others properties
                    'float': 'left',
                    'display': 'inline-block',
                    'padding': 0,
                    'position': 'relative',
                    'border': options.css.border.width + 'px solid ' + options.css.border.color,
                    'margin': options.css.margin
                });

            if (options.css.pointer) {
                $wrapper.css('cursor', 'pointer');
            }


            for (var i = 0; i < clones.length; ++i) {
                var title = $lis.eq(i).data('title'),
                    link = $lis.eq(i).data('link'),
                    order = $lis.eq(i).data('order'),
                    $wrapperClone = $wrapper
                    .clone()
                    .attr('data-id', i)
                    .html(clones[i])
                    .attr({
                        'class': 'sdfm-inner-wrapper ' + $lis.eq(i).attr('class')
                    });

                if (typeof (title) !== 'undefined') {
                    $.sdFilterMe.addOverlayTitles($wrapperClone, title, options, maxWidth, maxHeight);
                }

                if (typeof (link) !== 'undefined') {
                    $.sdFilterMe.addLink($wrapperClone, link, options);
                }

                if (typeof (order) !== 'undefined') {
                    $wrapperClone.attr('data-order', order);
                }

                $lis.eq(i).remove();
                $('#' + outerWrapperId).append($wrapperClone);
            }

            $outerWrapper = $('#' + outerWrapperId);

            $outerWrapper.before($el.clone(true)).find('> .sdfm-inner-wrapper').on('click', function () {
                $('#' + outerWrapperId).prev('ul').trigger('fm.boxClicked', [$(this).index(), $(this)
                    .attr('data-order')
                ]);
            });
            $el.remove();

            return $outerWrapper;

        };

        $.sdFilterMe.storeCoordinates = function ($el) {

            var layout = {};
            $el.find('> .sdfm-inner-wrapper').each(function (i) {

                layout[i] = {
                    origPosX: this.offsetLeft,
                    origPosY: this.offsetTop,
                    newPosX: this.offsetLeft,
                    newPosY: this.offsetTop
                };
            });
            return layout;
        };

        $.sdFilterMe.addOverlayTitles = function ($box, title, options, maxWidth, maxHeight) {

            var backgroundColor = options.css.overlay.background;
            $overlay = $('<div />')
                .addClass('sdfm-overlay')
                .css({
                    'background-color': 'rgba(' + backgroundColor.r + ', ' + backgroundColor.v + ', ' +
                        backgroundColor.b + ', ' + options.css.overlay.opacity + ')',
                    'position': 'absolute',
                    'top': 0,

                    // '-webkit-transition': 'all ' + options.css.overlay.duration + 'ms ' + options.animation,
                    // '-moz-transition': 'all ' + options.css.overlay.duration + 'ms ' + options.animation,
                    // '-ms-transition': 'all ' + options.css.overlay.duration + 'ms ' + options.animation,
                    // '-o-transition': 'all ' + options.css.overlay.duration + 'ms ' + options.animation,
                    // 'transition': 'all ' + options.css.overlay.duration + 'ms ' + options.animation,

                    'text-align': 'center',
                    'left': 0,
                    'width': maxWidth - options.css.border.width * 2,
                    'height': maxHeight - options.css.border.width * 2
                });

            $title = $('<span />')
                .css({
                    'margin': 'auto',
                    'text-transform': 'uppercase',
                    'display': 'inline-block',
                    'padding': '5px',
                    'width': 'auto',
                    'height': '50px',
                    'top': '50%',
                    'margin-top': '25px',
                    'color': options.css.overlay.color,
                    'font-size': '2em',
                    'border': options.css.overlay.border,
                    'font-weight': 'bold'
                }).html(title);

            $box.append($overlay.append($title));
        };

        $.sdFilterMe.translateBox = function ($box, target, options, hide) {

            if (!$.layout[$box.index()]) {
                console.error('Error: can\'t read value for ' + $box.index() + ' in $.layout[].');
                return;
            }

            var i = $box.index(),
                top = $.layout[i].origPosY,
                left = $.layout[i].origPosX,
                origPosX = $.layout[target].origPosX,
                origPosY = $.layout[target].origPosY,
                translateX = origPosX - left,
                translateY = origPosY - top,
                cssValue = 'translate(' + translateX + 'px, ' + translateY + 'px)';

            if (options.sortedOut == 'disappear' && hide === true) {
                cssValue += ' scale(0, 0)';
                $box.addClass('sdfm-box-hidden');
            } else if (options.sortedOut == 'disappear' && hide === false) {
                cssValue += ' scale(1, 1)';
                $box.removeClass('sdfm-box-hidden');
            } else {
                $box.removeClass('sdfm-box-hidden');
            }


            $.sdFilterMe.applyTransform($box, cssValue);

            $.layout[i].newPosX = origPosX;
            $.layout[i].newPosY = origPosY;
        };

        $.sdFilterMe.nothingToShow = function ($wrapper, options) {
            $nothingToShow = $('<h3 />')
                .addClass('sdfm-nothing')
                .css({
                    'font-size': '4em',
                    'color': options.nothingToShow.color,
                    'height': '0px',
                    //                'display': 'none',
                    'position': 'relative',
                    'margin': 0,
                    'transform': 'scale(0,0)',
                    //                'margin-bottom': '-125px',
                    'width': '100%',
                    'text-align': 'center',
                    //                'top': '50px',
                    // Setting transitions
                    // '-webkit-transition': 'all ' + options.duration + 'ms ' + options.animation,
                    // '-moz-transition': 'all ' + options.duration + 'ms ' + options.animation,
                    // '-ms-transition': 'all ' + options.duration + 'ms ' + options.animation,
                    // '-o-transition': 'all ' + options.duration + 'ms ' + options.animation,
                    // 'transition': 'all ' + options.duration + 'ms ' + options.animation
                }).html(options.nothingToShow.text);

            if (!$wrapper.prev('h3').hasClass('sdfm-nothing')) {
                $wrapper.before($nothingToShow);
            }

            window.setTimeout(function () {
                $.sdFilterMe.applyTransform($nothingToShow, 'scale(1, 1)');
            }, options.duration / 2);
        };

        $.sdFilterMe.filterBoxes = function ($el, filter, options) {

            var j = 0,
                $boxes = $el.find('> .sdfm-inner-wrapper'),
                k = $boxes.length - 1,
                nothing = [],
                l = 0;

            $boxes.each(function () {

                if ($(this).hasClass(filter) || filter === '*') {

                    if (options.sortedOut == 'opacity') {
                        $(this).animate({
                            opacity: 1
                        }, {
                            duration: options.duration
                        });
                    }

                    $.sdFilterMe.translateBox($(this), j++, options, false);

                } else {

                    nothing[l] = true;
                    if (options.sortedOut == 'opacity') {
                        $(this).animate({
                            opacity: 0.25
                        }, {
                            duration: options.duration
                        });
                    }
                    $.sdFilterMe.translateBox($(this), k--, options, true);
                    ++l;
                }
            });
            if (nothing.length == $boxes.length) {
                $.sdFilterMe.nothingToShow($el, options);
            } else {
                $.sdFilterMe.applyTransform($el.prev('.sdfm-nothing'), 'scale(0, 0)', options, function () {
                    $el.prev('.sdfm-nothing').remove();
                });

            }



        };

        $.sdFilterMe.applyTransform = function ($box, value, options, callback) {
            $box.css({
                '-webkit-transform': value,
                '-moz-transform': value,
                '-o-transform': value,
                '-ms-transform': value,
                'transform': value
            });

            if (callback) {
                window.setTimeout(function () {
                    callback();
                }, options.duration)
            }
        };

        $.sdFilterMe.hoverEffect = function ($el, options) {

            $el.find('> .sdfm-inner-wrapper').hover(function () {

                $(this).find('> .sdfm-overlay').fadeOut(options.css.overlay.duration).css({
                    'transform': 'scale(0, 0)'
                });

            }, function () {

                $(this).find('> .sdfm-overlay').fadeIn(options.css.overlay.duration).css({
                    'transform': 'scale(1, 1)'
                });

            })
        };

        $.sdFilterMe.addLink = function ($box, link, options) {

            $box.on('click', function () {
                document.location = link;
            });

        };

        $.sdFilterMe.sortBoxes = function ($boxes, sorting, options) {
            var k = $boxes.length - 1;
            $boxes.each(function (index, elem) {

                if (sorting == 'asc') {
                    $.sdFilterMe.translateBox($(elem), $(elem).attr('data-order'), options, false);
                } else if (sorting == 'desc') {
                    $.sdFilterMe.translateBox($(elem), k - $(elem).attr('data-order'), options, false);
                }

                $.sdFilterMe.applyTransform($boxes.parent().prev('.sdfm-nothing'), 'scale(0, 0)',
                    options,
                    function () {
                        $boxes.parent().prev('.sdfm-nothing').remove();
                    });
            });
        };

        $.sdFilterMe.defaults = {
            filterSelector: '.sorter',
            orderSelector: '.orderer',
            // duration: 1000,
            // animation: 'ease',
            // hoverEffect: true,
            sortedOut: 'disappear',
            css: {
                overlay: {
                    background: {
                        r: 0,
                        v: 0,
                        b: 0
                    },
                    duration: 250,
                    border: '1px solid white',
                    color: 'white',
                    opacity: 0.5
                },
                border: {
                    width: 10,
                    color: '#2A4153'
                },
                margin: 10,
                pointer: true
            },
            nothingToShow: {
                text: 'Tidak Ada Barang'
            }
        };

    })(jQuery);

    jQuery(function ($) {
        $('#sort-me').sdFilterMe({
            filterSelector: '.sorter',
            orderSelector: '.orderer',
            // duration: 1000,
            // animation: 'ease',
            // hoverEffect: true,
            sortedOut: 'disappear',
            // css: {
            //     overlay: {
            //         background: {
            //             r: 0,
            //             v: 0,
            //             b: 0
            //         },
            //         duration: 250,
            //         border: '1px solid white',
            //         color: 'white',
            //         opacity: 0.5
            //     },
            //     border: {
            //         width: 10,
            //         color: '#2A4153'
            //     },
            //     margin: 10,
            //     pointer: true
            // },
            nothingToShow: {
                text: 'Tidak Ada Barang',
                color: '#ccc'
            }
        }).on('fm.boxClicked', function (e, position, order) {
            console.log('Box position is ' + position);
            console.log('Box sort order is ' + order);
        });

        const room = document.querySelector('.menu');
        const btns = document.querySelectorAll('.menu_btn');

        room.addEventListener('click', e => {

            btns.forEach(btn => {

                if (btn.getAttribute('data-filter') === e.target.getAttribute('data-filter'))
                    btn.classList.add('active');
                else
                    btn.classList.remove('active');
            });
        });
    });

</script>


@endsection
