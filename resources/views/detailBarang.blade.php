@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/detailBarang.css')}}">
<style>
    .rating .checked {
        color: #ffc800;
    }

    .hr {
        margin: 2rem 0 2rem 0;
        color: inherit;
        border: 0;
        border-top: 1px solid;
        opacity: .25;
    }

    #detailBarang {
        height: max-content;
        width: 100%;
        /* display: flex; */
        justify-content: center;
        align-items: center;
    }

    .db_row {}

    .db_img {
        transform: translateY(10rem);
        height: max-content;
        width: 100%;
    }

    .db_img img {
        width: 100%;
        height: max-content
        object-fit: contain;
        aspect-ratio: 3/2;
    }

    .db_desc {
        /* background-color: rgb(221, 221, 221); */
        width: 100%;
        height: 106vh;
        display: flex;
        align-items: center;
        overflow: auto;
    }

    .dbd_content {
        width: 100%;
    }

    .card-title {
        font-size: 3rem;
        color: black;
        font-weight: bold;
    }

    .dbd_desc {
        background-color: #e9e9e9;
        padding: 1rem 1.5rem;
        border-radius: .5rem;
    }

    .dbd_rate {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .arrow_back {
        position: absolute;
        top: 0;
        left: 5rem;
        transform: translateY(7rem);
        border-radius: 50%;
        background-color: rgb(214, 214, 214);
        padding: 1rem;
    }

    .arrow_back:hover {
        background-color: rgb(177, 177, 177);
    }

    @media (max-width: 575px) {
        .arrow_back {
            left: .5rem;
        }
    }

    @media (max-width: 767px) {
        .db_desc {
            align-items: flex-end;
        }
    }

    div#social-links {
        /* margin: 0 auto; */
        /* max-width: 500px; */
    }

    div#social-links ul {
        /* display: inline-block; */
        padding: 0;
        display: flex;
        /* justify-content: end; */
        gap: .25rem;
        list-style: none;
    }

    div#social-links ul li{
        /* display: flex; */
        justify-content: center;
        align-items: center;
    }
    div#social-links ul li a {
        border-radius: 50%;
        padding: 3.5px 7px;
        /* border: 1px solid #ccc; */
        /* margin: 5px; */
        font-size: 100%;
        color: #222;
        background-color: #ccc;
    }
    div#social-links ul li a:hover {
        border-radius: 50%;
        padding: 3.5px 7px;
        font-size: 100%;
        color: #fafafa;
        background-color: #636363;
    }

</style>

@section('content')
{{-- <form action="" method="POST"> --}}
{{-- @csrf --}}
{{-- <img src="{{asset('storage/image/'.'/'.$barang->gambar_barang)}}" alt=""> --}}

<div class="container" id="detailBarang">
    <a href="{{ url()->previous() }}" class="arrow_back text-white">
        <i class="fa-solid fa-arrow-left"></i>
    </a>
    <div class="db_section">
        <div class="row db_row">
            <div class="db_img col-md-6">
                <img src="{{asset('img/'.$barang->file_name)}}" title="{{$barang->file_name}}" alt=""
                    width="75">
                    <div class="sosmed mt-2 gap-2 d-flex justify-content-end">
                        <p class="mb-0 text-end">Bagikan</p>
                        {!! $shareComponent !!}
                    </div>
            </div>
            <div class="db_desc col-md-6">
                <div class="dbd_content">
                    <h5 class="card-title">{{$barang->judul_barang}}</h5>
                    <h5 class="card-subtitle fw-light">Ketegori {{$barang->kategoriBarang->kategori_barang}}</h5>
                    <hr class="hr">
                    <div class="dbd_st d-flex align-items-center justify-content-between">
                        <p><span class="fw-bold">Stok :</span> {{$barang->stok}}</p>
                        <p><span class="fw-bold">Terjual :</span> {{$barang->terjual}}</p>
                    </div>
                    <p>Deskripsi :</p>
                    <p class="dbd_desc">{{$barang->deskripsi}}</p>
                    <hr class="hr">
                    @if ($barang->harga_diskon==null)
                    <h1 class="card-text fw-bolder mb-0" style="font-size: .75rem; visibility: hidden;">
                        Rp.{{ number_format($barang->harga_diskon, 2, ',', '.') }}</h1>
                    <h1 class="card-text fw-bolder mb-3">Rp.{{ number_format($barang->harga_asli, 2, ',', '.') }}</h1>
                    @else
                    <h1 class="card-text fw-bolder mb-0"
                        style="font-size: .75rem; text-decoration: line-through; color: red;">
                        Rp.{{ number_format($barang->harga_asli, 2, ',', '.') }}</h1>
                    <h1 class="card-text fw-bolder mb-3">Rp.{{ number_format($barang->harga_diskon, 2, ',', '.') }}</h1>
                    @endif
                    <div class="dbd_rate">
                        <div class="rating">
                            @if($barang->rate <= 0) <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                @elseif($barang->rate == 1)
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                @elseif($barang->rate == 2)
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                @elseif($barang->rate == 3)
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                @elseif($barang->rate == 4)
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl" aria-hidden="true"></i>
                                @elseif($barang->rate >= 5)
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                <i class="fa fa-star fa-xl checked" aria-hidden="true"></i>
                                @endif
                        </div>
                        <span class="fw-bold">{{$barang->rate}}/5</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- </form> --}}
@endsection
