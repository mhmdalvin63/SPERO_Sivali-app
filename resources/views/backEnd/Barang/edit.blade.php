@extends('backEnd.index')
@section('title', 'Edit Barang')
@section('mainContent')
    
<div class="card">
    <div class="card-body">
        <img src="{{asset('storage/image/'.$barang->gambar_barang)}}" alt="" width="100">
        @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        <form action="{{ route('b_update', $barang->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT')

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Status :</label>
                <select class="form-select" id="inputGroupSelect01" name="status" value="{{$barang->status}}">
                <option @if($barang->status == 'Active')@selected(true)@endif value="Active">Active</option>
                <option @if($barang->status == 'Non Active')@selected(true)@endif value="Non Active">Non Active</option>
                </select>
              </div>
              
            <div class="form-group mt-5">
                <label for="formFile" class="form-label">Pilih Gambar Barang (max 1024kb)</label>
                <input class="form-control file fw-bold"  onchange="validateFile()" type="file" id="formFile" name="file_name" value="{{$barang->file_name}}">
                <div class="result text-danger fw-bold"></div>
                @error('file_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect2">Pilih Kategori :</label>
                <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_kategori" value="{{$barang->id_kategori}}">
                  <option value="{{$barang->id_kategori}}" selected>{{$barang->KategoriBarang->kategori_barang}}</option>
                  @foreach ($kategoriBarang as $item)
                  <option value="{{ $item->id}}">{{ $item->kategori_barang}}</option>
                  @endforeach
                </select>
              </div>

            <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Judul Barang :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Judul Barang..." name="judul_barang" value="{{$barang->judul_barang}}">
            </div>
            <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Deskripsi Barang :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Deskripsi Barang..." name="deskripsi" value="{{$barang->deskripsi}}">
            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect01">Jenis Promosi :</label>
                <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="promosi" value="{{$barang->promosi}}">
                <option @if($barang->promosi == 'Baru')@selected(true)@endif value="Baru">Baru</option>
                <option @if($barang->promosi == 'Terlaris')@selected(true)@endif value="Terlaris">Terlaris</option>
                <option @if($barang->promosi == 'Promo')@selected(true)@endif value="Promo">Promo</option>
                </select>
              </div>

            <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Harga Barang Asli :</label>
                <input type="number" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Harga Barang Asli..." name="harga_asli" value="{{$barang->harga_asli}}">
            </div>
            <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Harga Barang Diskon :</label>
                <input type="number" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Harga Barang Diskon..." name="harga_diskon" value="{{$barang->harga_diskon}}">
            </div>
            <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Stok Barang :</label>
                <input type="number" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Stok Barang..." name="stok" value="{{$barang->stok}}">
            </div>
            <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Barang Terjual :</label>
                <input type="number" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Barang Terjual..." name="terjual" value="{{$barang->terjual}}">
            </div>
            <div class="form-group mt-5">
                <label for="exampleInputUsername1" class="fw-bold">Rating Barang (Max:5) :</label>
                <input type="number" class="form-control" id="exampleInputUsername1" name="rate" value="{{$barang->rate}}">
            </div>
            {{-- <div class="form-group">
                <label for="exampleInputUsername1">Password :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Password..." name="password">
            </div>
            <div class="form-group">
                <label for="exampleInputUsername1">Nama Petugas :</label>
                <input type="text" class="form-control" id="exampleInputUsername1"
                    placeholder="Masukkan Nama Petugas..." name="nama_petugas">
            </div> --}}
            <div class="modal-footer">
                <a href="{{ route('b_index') }}" class="btn btn-outline-warning btn-icon-text">
                    Cancel
                </a>
                <button type="submit" id="dis" class="btn btn-outline-primary btn-icon-text">
                    Submit
                </button>
            </div>
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