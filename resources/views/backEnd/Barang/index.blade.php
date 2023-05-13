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
            <div class="table-responsive text-center">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Gambar</th>
                            <th>Kategori</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Harga Asli</th>
                            <th>Harga Diskon</th>
                            <th>Rating</th>
                            {{-- @if(auth()->user()->level == "admin") --}}
                            <th>Aksi</th>
                            {{-- @endif --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td><img src="{{$item->file_location.'/'.$item->file_hash}}" title="{{$item->file_name}}" alt="" width="75"></td>
                            {{-- <td><img src="{{asset('storage/image/'.$item->file_hash)}}" alt="" width="75"></td> --}}
                            <td>{{$item->kategoriBarang->kategori_barang}}</td>
                            <td>{{$item->judul_barang}}</td>
                            <td>{{$item->deskripsi}}</td>
                            <td>{{$item->harga_asli}}</td>
                            <td>{{$item->harga_diskon}}</td>
                            <td>{{$item->rate}}</td>
                            {{-- @if(auth()->user()->level == "admin") --}}
                            <td class="d-flex gap-3 justify-content-center">
                                {{-- <a href="{{ route('b_show', $item->id )}}" class="btn btn-outline-primary
                                btn-icon-text">
                                Lihat
                                </a> --}}
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
