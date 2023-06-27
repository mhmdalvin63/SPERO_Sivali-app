@extends('backEnd.index')
@section('title', 'Input Kategori Barang')
@section('mainContent')

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-5">
                <h4 class="card-title">Form Kategori Barang</h4>
                @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <form action="{{ route('kb_store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="formFile" class="form-label">Pilih Gambar Kategori (max 1024kb)</label>
                        <input class="form-control file fw-bold" onchange="validateFile()" type="file" id="formFile" name="gambar_kategori" >
                        <div class="result text-danger fw-bold"></div>
                        @error('gambar_kategori')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                      </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="fw-bold">Nama Kategori Barang :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Nama Kategori Barang..." name="kategori_barang">
                            @error('kategori_barang')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('kb_index') }}" class="btn btn-outline-warning btn-icon-text">
                            Cancel
                        </a>
                        <button type="submit" id="dis" class="btn btn-outline-primary btn-icon-text">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
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
