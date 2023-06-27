@extends('backEnd.index')
@section('title', 'Input Barang')
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
                <form action="{{ route('b_store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Status :</label>
                        <select class="form-select" id="inputGroupSelect01" name="status" required>
                          {{-- <option>Pilih Jenis...</option> --}}
                          <option value="Active">Active</option>
                          <option value="Non Active">Non Active</option>
                        </select>
                    </div>
                    <div class="form-group mt-5">
                        <label for="formFile " class="form-label">Pilih Gambar Barang (max 1024kb)</label>
                        <input class="form-control file fw-bold"  onchange="validateFile()" type="file" id="formFile" name="file_name">
                        <div class="result text-danger fw-bold"></div>
                        @error('file_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Pilih Kategori :</label>
                        <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_kategori">
                          @foreach ($kategoriBarang as $item)
                          <option value="{{ $item->id}}">{{ $item->kategori_barang}}</option>
                          @endforeach
                        </select>
                        @error('id_kategori')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                      </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Judul Barang :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Judul Barang..." name="judul_barang">
                            @error('judul_barang')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Deskripsi Barang :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Deskripsi Barang..." name="deskripsi">
                            @error('deskripsi')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01">Jenis Promosi :</label>
                        <select class="form-select" id="inputGroupSelect01" name="promosi">
                          {{-- <option>Pilih Jenis...</option> --}}
                          <option value="Baru">Baru</option>
                          <option value="Terlaris">Terlaris</option>
                          <option value="Promo">Promo</option>
                        </select>
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Harga Barang Asli :</label>
                        <input type="number" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Harga Barang Asli..." name="harga_asli">
                            @error('harga_asli')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Harga Barang Diskon :</label>
                        <input type="number" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Harga Barang Diskon..." name="harga_diskon">
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Stok Barang :</label>
                        <input type="number" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Stok Barang..." name="stok">
                            @error('stok')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Jumlah Terjual :</label>
                        <input type="number" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Jumlah Terjual..." name="terjual">
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Rating Barang (Max:5) :</label>
                        <input type="number" class="form-control" id="exampleInputUsername1" name="rate">
                        @error('rate')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    </div>
                    
                    <div class="modal-footer">
                        <a href="{{ route('b_index') }}" class="btn btn-outline-warning btn-icon-text">
                            Cancel
                        </a>
                        <button type="submit" class="btn btn-outline-primary btn-icon-text">
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
         }else{
            resEle.innerHTML = "";
         }
      }
   }
</script>
@endsection
