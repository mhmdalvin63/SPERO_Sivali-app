@extends('backEnd.index')
@section('title', 'Edit Artikel')
@section('mainContent')
    
<div class="card">
    <div class="card-body">
        <img src="{{asset('storage/image/'.$Artikel->gambar_artikel)}}" alt="" width="100">
        <form action="{{ route('art_update', $Artikel->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group mt-5">
                <label for="formFile" class="form-label">Ubah Gambar Jika Ingin (max 2048kb)</label>
                <input class="form-control  fw-bold" type="file" id="formFile" name="gambar_artikel" value="{{ $Artikel->gambar_artikel}}">
                @error('gambar_artikel')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputUsername1" class="fw-bold">Judul Artikel :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Judul Artikel..." name="judul_artikel" value="{{ $Artikel->judul_artikel}}">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1" class="fw-bold">Sub Judul Artikel :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Subjudul Artikel..." name="subjudul_artikel" value="{{ $Artikel->subjudul_artikel}}">
            </div>
            <div class="form-group">
                <label for="floatingTextarea">Deskripsi Artikel :</label>
                <textarea class="form-control" placeholder="Masukkan Deskripsi Artikel" id="floatingTextarea" name="deskripsi_artikel" >{{ $Artikel->deskripsi_artikel}}</textarea>
              </div>
              <a href="{{ route('art_index') }}" class="btn btn-outline-warning btn-icon-text">                                                  
                Cancel
              </a>
            <button class="btn btn-outline-primary" type="submit">Submit</button>
        </form>
    </div>
</div>

@endsection