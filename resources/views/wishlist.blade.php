@extends('layout.main')
{{-- <link rel="stylesheet" href="{{asset('../css/detailBarang.css')}}"> --}}
<style>
    #parent_all{
        height: max-content;
        padding-top: 8rem;;
    }
    .td_right {
        display: flex;
        flex-direction: column;
        row-gap: 2rem;
    }
    .td_left{
        width: 30%;
        height: 100%;
        padding: 1rem;
        /* background-color: rgb(230, 230, 230); */
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        /* border-radius: 5%; */
    }
    .td_left img{
        width: 100%;
        height: 100%;
        object-fit: contain;
    }
    .hr {
    margin: .5rem 0 .5rem 0;
    color: inherit;
    border: 0;
    border-top: 1px solid;
    opacity: .25;
}
</style>
@section('content')

    <div class="container" id="parent_all">
        <div class="row">
            <div class="col-md-12">
                <div class="header d-flex align-items-center justify-content-between">
                    <h2>Wishlist</h2>
                    <h2>3 Barang</h2>
                </div>
                <hr class="hr">
                <div class="content">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Detail Produk</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Total</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($Favorit as $item)
                                <tr>
                                    <td class="detail_produk d-flex align-items-center gap-3">
                                        <div class="td_left">
                                            <img src="{{$item->Barang->file_location.'/'.$item->Barang->file_hash}}" title="{{$item->Barang->file_name}}" alt="" width="75">
                                        </div>
                                        <div class="td_right">
                                            <div class="judul fw-bold">
                                                {{$item->Barang->judul_barang}} 
                                            </div>
                                            <div class="kategori">
                                                {{$item->Barang->KategoriBarang->kategori_barang}}   
                                            </div>
                                            <div class="harga">
                                                {{$item->Barang->Harga}} 
                                            </div>
                                        </div>
                                    </td>
                                    <td>2</td>
                                    <td>Rp. 35.000</td>
                                    <td>Rp. 70.000</td>
                                </tr>
                              @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{-- <div class="col-md-3">
                <h1>Order Summary</h1>
                <hr>
            </div> --}}
        </div>
    </div>


@endsection