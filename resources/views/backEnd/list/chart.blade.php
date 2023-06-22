@extends('backEnd.index')
@section('title', 'List Cart')
@section('mainContent')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <div class="card-title d-flex justify-content-end mb-5">
                <!-- <a href="{{ route('kb_create') }}" class="btn btn-primary btn-icon-text">
                    <i class="mdi mdi-upload btn-icon-prepend"></i>
                    Upload
                </a> -->
                {{-- <a href="" class="btn btn-primary">
              Add Category
          </a> --}}
            </div>
            <div class="table-responsive text-center">
                <table class="table table-hover table-striped mt-3">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Customer</th>
                            <th>Nama Barang</th>
                            <th>Gambar</th>
                            <th>Jumlah Barang</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chart as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->user->name}}</td>
                            <td>{{$item->barang->judul_barang}}</td>
                            <td><img src="{{asset('img/'.$item->barang->file_name)}}" alt="" height="60"></td>
                            <td>{{$item->qty}}</td>
                            {{-- @endif --}}
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
