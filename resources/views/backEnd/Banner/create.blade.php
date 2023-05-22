@extends('backEnd.index')
@section('title', 'Input Data Banner')
@section('mainContent')

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-5">
                <h4 class="card-title">Form Kategori Barang</h4>
                <form action="{{ route('ban_store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group mt-5">
                        <label for="formFile" class="form-label">Pilih Gambar Banner</label>
                        <input class="form-control" type="file" id="formFile" name="gambar_banner">
                      </div>
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Link URL :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Link URL..." name="url">
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
                        <a href="{{ route('ban_index') }}" class="btn btn-outline-warning btn-icon-text">
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
