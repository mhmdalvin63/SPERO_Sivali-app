@extends('layout.main')
{{-- <link rel="stylesheet" href="{{asset('../css/detailBarang.css')}}"> --}}
<style>
    .kosong{
        height: 5.2rem;
    }
    .hr {
        margin: .5rem 0 .5rem 0;
        color: inherit;
        border: 0;
        border-top: 1px solid;
        opacity: .25;
    }
    #wl_content{
        /* transform: translateY(5.2rem); */
    }
    .navWl{
        background-color: #f3f3f3;
        padding: 1rem 0;
    }
    .navWl p{
        /* padding-bottom: 0; */
        padding-left: 1rem;
        border-left: 1px solid #444444;
    }
    #produk .parent_img{
        width: 25%;
        height: 7.5rem;
    }
    .tableContent a{
        text-decoration: none;
        color: black;
    }
    .tableContent a:hover{
        text-decoration: none;
        color: black;
    }
    #tableRow #tr_row:hover{
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    @media (max-width: 768px) {
        .judul_barang{
            text-align: center;
        }
        #produk .parent_img{
        width: 100%;
        height: 7.5rem;
        }
        .judul_barang p{
            margin-top: 1rem;
        }
        .harga{
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    }
    @media (min-width: 768px) and (max-width: 992px) {
        #produk .parent_img{
        width: 50%;
        height: 7.5rem;
        }
        .harga{
            width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    }

</style>
@section('content')
<div class="kosong"></div>

<div id="wl_content">
    <div class=" navWl">
        <div class="container d-flex align-items-center gap-3">
            <a class="navbar-brand" href="/home"><img src="{{asset('../img/logo-sivali.png')}}" width="100px" alt=""></a>
            <p class="mb-0 fs-2 fw-bold">Wishlist</p>   
        </div>
    </div>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="tableHead">
                    <div class="col-md-12">
                        <div class="row fw-bold text-center">
                            <div class="col-md-8 col-6">Produk</div>
                            <div class="col-md-2 col-3">Harga</div>
                            <div class="col-md-2 col-3">Aksi</div>
                        </div>
                    </div>
                </div>
                <div class="tableContent">
                    @foreach ($Favorit as $item)
                        <a href="{{ route('detail_barang', $item->id_barang)}}">
                        {{-- <a href=""> --}}
                            <div class="row">
                                <div class="col-md-12 mt-5" id="tableRow">
                                    <div class="row" id="tr_row">
                                        <div class="col-md-8 col-6">
                                            <div class="row" id="produk">
                                                <div class="parent_img col-md-6 col-12">
                                                    <img src="{{$item->Barang->file_location.'/'.$item->Barang->file_hash}}"
                                                        title="{{$item->Barang->file_name}}" alt="" width="75"
                                                        style="width: 100%; height: 100%; object-fit: contain;">
                                                </div>
                                                <div class="judul_barang col-md-6 col-12">
                                                    <p>{{$item->Barang->judul_barang}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="harga col-md-2 col-3 text-center">
                                            @if ($item->Barang->harga_diskon==null)
                                            <span class="fw-bold">Rp.{{ number_format($item->Barang->harga_asli, 2, ',', '.') }}</span>
                                            @else
                                            <span class="fw-bold">Rp.{{ number_format($item->Barang->harga_diskon, 2, ',', '.') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-2 col-3 text-center">
                                            <form action="{{ route('wl_delete', ['id' => $item->id]) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger btn-icon-text">Hapus</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
