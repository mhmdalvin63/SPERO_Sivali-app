@extends('backEnd.index')
@section('title', 'Edit Kategori Barang')
@section('mainContent')
    
<div class="card">
    <div class="card-body">
        <img src="{{asset('img'.$KategoriBarang->gambar_kategori)}}" alt="" width="100">
        <form action="{{ route('kb_update', $KategoriBarang->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group mt-5">
                <label for="formFile" class="form-label">Ubah Gambar Jika Ingin (max 2048kb)</label>
                <input class="form-control fw-bold" type="file" id="formFile" name="gambar_kategori" value="{{ $KategoriBarang->gambar_kategori}}"> @error('gambar_kategori')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group mt-5">
                <label for="exampleInputUsername1">Nama Kategori Barang :</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Kategori Barang..." name="kategori_barang" value="{{ $KategoriBarang->kategori_barang }}" >
              </div>
              <a href="{{ route('kb_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection