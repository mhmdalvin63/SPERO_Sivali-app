@extends('backEnd.index')
@section('title', 'Input Kategori Barang')
@section('mainContent')

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-5">
                <h4 class="card-title">Form Kategori Barang</h4>
                <form action="{{ route('kb_store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="formFile" class="form-label">Pilih Gambar Kategori (1080px x 1080px)</label>
                        <input class="form-control" type="file" id="formFile" name="gambar_kategori">
                      </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="fw-bold">Nama Kategori Barang :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Nama Kategori Barang..." name="kategori_barang">
                    </div>
                    <div class="modal-footer">
                        <a href="{{ route('kb_index') }}" class="btn btn-outline-warning btn-icon-text">
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
