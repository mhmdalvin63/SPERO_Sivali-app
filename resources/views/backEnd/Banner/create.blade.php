@extends('backEnd.index')
@section('title', 'Input Data Banner')
@section('mainContent')

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-5">
                <h4 class="card-title">Form Banner</h4>
                <form action="{{ route('ban_store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                      <div class="form-group mt-5">
                        <label for="formFile" class="form-label">Pilih Gambar Banner (1440px x 556px)</label>
                        <input class="form-control fw-bold" type="file" id="formFile" name="gambar_banner">
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect2">Pilih Barang :</label>
                        <select class="form-control form-control-lg" id="exampleFormControlSelect2" name="id_barang">
                          @foreach ($Barang as $item)
                          <option value="{{ $item->id}}">{{ $item->judul_barang }}</option>
                          @endforeach
                        </select>
                      </div>
                    {{-- <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Link URL :</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Link URL..." name="url">
                    </div> --}}
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
