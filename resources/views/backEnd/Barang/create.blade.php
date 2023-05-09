@extends('backEnd.index')
@section('title', 'Input Barang')
@section('mainContent')

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-5">
                <h4 class="card-title">Form Kategori Barang</h4>
                <form action="{{ route('b_store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group mt-5">
                        <label for="formFile" class="form-label">Pilih Gambar Barang</label>
                        <input class="form-control" type="file" id="formFile" name="gambar_barang">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect2">Pilih Kategori :</label>
                        <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_kategori">
                          @foreach ($kategoriBarang as $item)
                          <option value="{{ $item->id}}">{{ $item->kategori_barang}}</option>
                          @endforeach
                        </select>
                      </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Judul Barang :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Judul Barang..." name="judul_barang">
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Deskripsi Barang :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Deskripsi Barang..." name="deskripsi">
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Harga Barang :</label>
                        <input type="number" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Harga Barang..." name="harga">
                    </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Rating Barang (Max:5) :</label>
                        <input type="number" class="form-control" id="exampleInputUsername1" name="rate">
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
                        <button type="submit" class="btn btn-outline-primary btn-icon-text">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
