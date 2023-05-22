@extends('layout.main')
<link rel="stylesheet" href="{{asset('../css/detailBarang.css')}}">
<style>
    .rating .checked{
    color: #ffc800;
}
.hr {
    margin: 2rem 0 2rem 0;
    color: inherit;
    border: 0;
    border-top: 1px solid;
    opacity: .25;
}
#detailBarang{
    height: 100vh;
    width: 100%;
    /* display: flex; */
    justify-content: center;
    align-items: center;
}
.db_row{
}
.db_img{
    transform: translateY(10rem);
    height: 100%;
    width: 100%;
}
.db_img img{
    width: 100%;
    height: 100%;
    object-fit: contain;
    aspect-ratio: 3/2;
}
.db_desc{
    /* background-color: rgb(221, 221, 221); */
    width: 100%;
    height: 106vh;
    display: flex;
    align-items: center;
    overflow: auto;
}
.dbd_content{
    width: 100%;
}
.card-title{
    font-size: 3rem;
    color: black;
    font-weight: bold;
}
.dbd_desc{
    background-color: #d6d6d6;
    padding: 1rem 1.5rem;
}
.dbd_rate{
    display: flex;
    align-items: center;
    gap: 1rem;
}
.arrow_back{
    position: absolute;
    top: 0;
    left: 5rem;
    transform: translateY(7rem);
    border-radius: 50%;
    background-color: rgb(214, 214, 214);
    padding: 1rem;
}
.arrow_back:hover{
    background-color: rgb(177, 177, 177);
}
</style>

@section('content')
{{-- <form action="" method="POST"> --}}
    {{-- @csrf --}}
            {{-- <img src="{{asset('storage/image/'.'/'.$barang->gambar_barang)}}" alt=""> --}}
            
            <div class="container" id="detailBarang">
                <a href="/home" class="arrow_back text-white">                                            
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
                <div class="db_section">
                    <div class="row db_row">
                        <div class="db_img col-md-6">
                            <img src="{{$barang->file_location.'/'.$barang->file_hash}}" title="{{$barang->file_name}}" alt="" width="75">
                        </div>
                        <div class="db_desc col-md-6">
                            <div class="dbd_content">
                                <h5 class="card-title">{{$barang->judul_barang}}</h5>
                                <h5 class="card-subtitle">Ketegori  {{$barang->kategoriBarang->kategori_barang}}</h5>
                                <hr class="hr">
                                <div class="dbd_st d-flex align-items-center justify-content-between">
                                    <p><span class="fw-bold">Stok :</span> {{$barang->stok}}</p>
                                    <p><span class="fw-bold">Terjual :</span> {{$barang->terjual}}</p>
                                </div>
                                <p>Deskripsi :</p>
                                <p class="dbd_desc">{{$barang->deskripsi}}</p>
                                <hr class="hr">
                                @if ($barang->harga_diskon==null)
                                    <h1 class="card-text fw-bolder mb-0" style="font-size: .75rem; visibility: hidden;">Rp.{{ number_format($barang->harga_diskon, 2, ',', '.') }}</h1>
                                        <h1 class="card-text fw-bolder mb-3">Rp.{{ number_format($barang->harga_asli, 2, ',', '.') }}</h1>
                                @else
                                    <h1 class="card-text fw-bolder mb-0" style="font-size: .75rem; text-decoration: line-through; color: red;">Rp.{{ number_format($barang->harga_asli, 2, ',', '.') }}</h1>
                                    <h1 class="card-text fw-bolder mb-3">Rp.{{ number_format($barang->harga_diskon, 2, ',', '.') }}</h1>
                                @endif
                            <div class="dbd_rate">
                                <div class="rating"> 
                                    @if($barang->rate <= 0)
                                        <i class="fa fa-star fa-xl" aria-hidden="true"></i>
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