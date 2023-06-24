@extends('backEnd.index')
@section('title', 'Input Data Artikel')
@section('mainContent')

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-5">
                <h4 class="card-title">Form Artikel</h4>
                <form action="{{ route('art_store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group mt-5">
                        <label for="formFile" class="form-label">Pilih Gambar Artikel (max 2048kb)</label>
                        <input class="form-control fw-bold" type="file" id="formFile" name="gambar_artikel">
                        @error('gambar_artikel')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                      </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="fw-bold">Judul Artikel :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Judul Artikel..." name="judul_artikel">
                            @error('judul_artikel')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="fw-bold">Subudul Artikel :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Subjudul Artikel..." name="subjudul_artikel">
                            @error('subjudul_artikel')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputUsername1" class="fw-bold">Deskripsi Artikel :</label>
                        <textarea class="form-control" placeholder="Masukkan Deskripsi Artikel" id="floatingTextarea" name="deskripsi_artikel"></textarea>
                        @error('deskripsi_artikel')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                      </div>
                    <div class="modal-footer">
                        <a href="{{ route('art_index') }}" class="btn btn-outline-warning btn-icon-text">
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
