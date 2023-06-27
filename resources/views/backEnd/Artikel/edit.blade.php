@extends('backEnd.index')
@section('title', 'Edit Artikel')
@section('mainContent')
    
<div class="card">
    <div class="card-body">
        <img src="{{asset('storage/image/'.$Artikel->gambar_artikel)}}" alt="" width="100">
        @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
        <form action="{{ route('art_update', $Artikel->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group mt-5">
                <label for="formFile" class="form-label">Ubah Gambar Jika Ingin (max 1024kb)</label>
                <input class="form-control file fw-bold"  onchange="validateFile()" type="file" id="formFile" name="gambar_artikel" value="{{ $Artikel->gambar_artikel}}">
                <div class="result text-danger fw-bold"></div>
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
            <button class="btn btn-outline-primary" id="dis" type="submit">Submit</button>
        </form>
    </div>
</div>

<script>
   let BtnEle = document.querySelector(".Btn");
   let resEle = document.querySelector(".result");
   let fileEle = document.querySelector(".file");
   function validateFile() {
      if (fileEle.files.length) {
         let fileSize = Math.round(fileEle.files[0].size / 1024);
         if (fileSize > 1024) {
            resEle.innerHTML = "Ukuran Image Melebihi 1024Kb!";
            document.getElementById("dis").disabled = true;
         }else{
            resEle.innerHTML = "";
            document.getElementById("dis").disabled = false;
         }
      }
   }
</script>
@endsection