@extends('backEnd.index')
@section('title', 'List Artikel')
@section('mainContent')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="card-title d-flex justify-content-end mb-5">
                <a href="{{ route('art_create') }}" class="btn btn-primary btn-icon-text">
                    <i class="mdi mdi-upload btn-icon-prepend"></i>
                    Upload
                </a>
               
            </div>
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
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Judul</th>
                            <th>Subjudul</th>
                            <th>Deskripsi</th>
                            {{-- @if(auth()->user()->level == "admin") --}}
                            <th>Aksi</th>
                            {{-- @endif --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Artikel as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            {{-- <td><img src="../storage/image/{{$item->gambar_barang}}" alt="" width="200px"></td> --}}
                            <td><img src="{{asset('img/'.$item->gambar_artikel)}}" alt="" height="60"></td>
                            <td>{{$item->judul_artikel}}</td>
                            <td>{{$item->subjudul_artikel}}</td>
                            <td>{{$item->deskripsi_artikel}}</td>
                            {{-- <td>{{$item->nama_petugas}}</td> --}}
                            {{-- @if(auth()->user()->level == "admin") --}}
                            <td class="d-flex gap-3 justify-content-center align-items-center">
                                {{-- <a href="{{ route('kb_show', $item->id )}}" class="btn btn-outline-primary
                                btn-icon-text">
                                Lihat
                                </a> --}}
                                <a href="{{ route('art_edit', $item->id )}}"
                                    class="btn btn-outline-success btn-icon-text">
                                    Edit
                                </a>
                                <form action="{{ route('art_delete', $item->id) }}" method="POST">
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
