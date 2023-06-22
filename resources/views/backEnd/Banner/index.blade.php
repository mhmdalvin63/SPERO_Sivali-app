@extends('backEnd.index')
@section('title', 'List Banner')
@section('mainContent')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
  
        <div class="card-body">
            {{-- @if(auth()->user()->level == "admin") --}}
            <div class="card-title d-flex justify-content-end mb-5">
                <a href="{{ route('ban_create') }}" class="btn btn-primary btn-icon-text">
                    <i class="mdi mdi-upload btn-icon-prepend"></i>
                    Upload
                </a>
                {{-- <a href="" class="btn btn-primary">
              Add Category
          </a> --}}
            </div>
            {{-- @endif --}}
            @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('deleted'))
    <div class="alert alert-danger alert-dismissible fade show">
        {{ session('deleted') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
            <div class="table-responsive text-center">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Barang</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Banner as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td><img src="{{asset('img/'.$item->gambar_banner)}}" alt="" width="75"></td>
                            <td>{{$item->Barang->judul_barang}}</td>
                            <td class="d-flex gap-3 justify-content-center align-items-center">
                                <a href="{{ route('ban_edit', $item->id )}}"
                                    class="btn btn-outline-success btn-icon-text">
                                    Edit
                                </a>
                                <form action="{{ route('ban_delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-icon-text">Hapus</button>
                                </form>
                            </td>
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
