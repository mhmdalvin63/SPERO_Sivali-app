@extends('backEnd.index')
@section('title', 'Edit Kategori Barang')
@section('mainContent')
    
<div class="card">
    <div class="card-body">
        <img src="{{asset('img/storage'.$KategoriBarang->gambar_kategori)}}" alt="" width="100">
        @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
         @endif
        <form action="{{ route('kb_update', $KategoriBarang->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')
            <div class="form-group mt-5">
                <label for="formFile" class="form-label">Ubah Gambar Jika Ingin (max 1024kb)</label>
                <input class="form-control file fw-bold" onchange="validateFile()" class="fw-bold" type="file" id="formFile" name="gambar_kategori" value="{{ $KategoriBarang->gambar_kategori}}"> 
                <div class="result text-danger fw-bold"></div>
                @error('gambar_kategori')
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