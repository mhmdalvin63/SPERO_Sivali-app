@extends('backEnd.index')
@section('title', 'Edit Banner')
@section('mainContent')
    
<div class="card">
    <div class="card-body">
        <img src="{{asset('storage/image/'.$Banner->gambar_banner)}}" alt="" width="100">
        <form action="{{ route('ban_update', $Banner->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group mt-5">
                <label for="formFile" class="form-label">Ubah Gambar Jika Ingin</label>
                <input class="form-control" type="file" id="formFile" name="gambar_banner" value="{{ $Banner->gambar_banner}}">
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect2">Pilih Barang :</label>
                <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_barang" value="{{$Banner->id_barang}}">
                  <option selected value="{{$Banner->Barang->id}}">{{$Banner->Barang->judul_barang}}</option>
                  @foreach ($Barang as $item)
                  <option value="{{ $item->id}}">{{ $item->judul_barang }}</option>
                  @endforeach
                </select>
              </div>
              
              {{-- <div class="form-group mt-5">
                <label for="exampleInputUsername1">URL :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan URL..." name="url" value="{{ $Banner->url }}" >
              </div> --}}
              <a href="{{ route('ban_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>


@endsection