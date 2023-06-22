@extends('backEnd.index')
@section('title', 'List Barang')
@section('mainContent')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            {{-- @if(auth()->user()->level == "admin") --}}
            <div class="card-title d-flex justify-content-end mb-5">
                <a href="{{ route('b_create') }}" class="btn btn-primary btn-icon-text">
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
                            <th>Status</th>
                            <th>Gambar</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Jenis Promosi</th>
                            <th>Harga Asli</th>
                            <th>Harga Diskon</th>
                            <th>Stok</th>
                            <th>Terjual</th>
                            <th>Rating</th>
                            {{-- @if(auth()->user()->level == "admin") --}}
                            <th>Aksi</th>
                            {{-- @endif --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>
                                @if ($item->status == 'Active')
                                    <button class="btn btn-outline-primary fw-bold text-dark">Active</button>
                                @else
                                    <button class="btn btn-outline-danger fw-bold text-dark">Non Active</button>
                                @endif
                            </td>
                            <td><img src="{{asset('img/'.$item->file_name)}}" alt="" height="60"></td>
                            {{-- <td><img src="{{asset('storage/image/'.$item->file_hash)}}" alt="" width="75"></td> --}}
                            <td>{{$item->kategoriBarang->kategori_barang}}</td>
                            <td>{{$item->judul_barang}}</td>
                            <td>{{$item->promosi}}</td>
                            <td>{{$item->harga_asli}}</td>
                            <td>{{$item->harga_diskon}}</td>
                            <td>{{$item->stok}}</td>
                            <td>{{$item->terjual}}</td>
                            <td>{{$item->rate}}</td>
                            <td class="d-flex gap-3 justify-content-center align-items-center">
                                <a href="{{ route('b_edit', $item->id )}}"
                                    class="btn btn-outline-success btn-icon-text">
                                    Edit
                                </a>
                                <form action="{{ route('b_delete', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-icon-text">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
