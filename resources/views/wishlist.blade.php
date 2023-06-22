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
    .navWl{
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
    .search-wishlist input{
        padding: .25rem 1rem;
        width: 100%;
        border: 1px solid grey !important;
        outline: none;
        border-radius: 10px;
        
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

    .arrow_back {
        /* position: absolute;
        top: 0;
        left: 5rem;
        transform: translateY(7rem); */
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

</style>
@section('content')
{{-- <div class="kosong"></div> --}}
<div id="wl_content">
    <div class=" navWl">    
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-6">
                    <div class="container d-flex  align-items-center gap-3">
                        <a href="{{ url('katalog') }}#list_katalog" class="arrow_back text-white">
                            <i class="fa-solid fa-arrow-left"></i>
                        </a>
                        {{-- <a class="navbar-brand" href="/home"><img src="{{asset('../img/logo-sivali.png')}}" width="100px" alt=""></a> --}}
                        <p class="mb-0 fs-2 fw-bold">Wishlist</p>   
                    </div>
                </div>
                <div class="col-7 col-sm-6 my-auto">
                    <p class="border-0 mb-2">Total Barang : {{ $FavoritMerge->count() }}</p>
                    <div class="search-wishlist d-flex justify-content-end align-items-center">
                        <input id="myInput" type="text" placeholder="Search Barang"> 
                    </div>
                </div>
            </div>
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
                            <div class="col-md-2 col-3"></div>
                        </div>
                    </div>
                </div>
                <div class="tableContent">
                    {{-- @if (is_iterable($Favorit)){ --}}
                        @foreach ($FavoritMerge as $item)
                            <a href="{{ route('detail_barang', $item->id_barang)}}">
                            {{-- <a href=""> --}}
                                <div class="row">
                                    <div class="col-md-12 mt-5" id="tableRow">
                                        <div class="row" id="tr_row">
                                            <div class="col-md-8 col-6">
                                                <div class="row" id="produk">
                                                    <div class="parent_img col-md-6 col-12">
                                                        <img src="{{'img/'.$item->Barang->file_name}}"
                                                            title="{{$item->Barang->file_name}}" alt="" width="75"
                                                            style="width: 100%; height: 100%; object-fit: contain;">
                                                    </div>
                                                    <div class="judul_barang col-md-6 col-12 mt-5">
                                                        <p>{{$item->Barang->judul_barang}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="harga col-md-2 col-3 text-center mt-5">
                                                @if ($item->Barang->harga_diskon==null)
                                                <span class="fw-bold">Rp.{{ number_format($item->Barang->harga_asli, 2, ',', '.') }}</span>
                                                @else
                                                <span class="fw-bold">Rp.{{ number_format($item->Barang->harga_diskon, 2, ',', '.') }}</span>
                                                @endif
                                            </div>
                                            <div class="col-md-2 col-3 text-center mt-5">
                                                {{-- <a href="{{ route('Favorit-delete',['id' => $item->id]) }}">Hapus</a> --}}
                                                <form method="POST" action="{{ route('Favorit-delete',$item->id_barang) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type='submit' class="text-inverse" data-toggle="tooltip" style="border: none;">
                                                      <i class="fa-solid fa-xmark"></i>
                                                    </button>
                                                </form>
                                                {{-- <div class="button-hapus">
                                                    <a href="{{ route('Favorit-delete', [$item->id_barang]) }}" class="btn btn-sm text-white btn-danger">Delete</a>

                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    {{-- } --}}
                    {{-- @endif --}}
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".tableContent a").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
@endsection
