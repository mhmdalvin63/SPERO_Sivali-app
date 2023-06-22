@extends('backEnd.index')
@section('title', 'Edit User')
@section('mainContent')

<div class="row d-flex" style="justify-content: center;">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body p-5">
                <h4 class="card-title">Form Edit User</h4>
                <form action="{{ url('manage_user') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group mt-5">
                        <label for="exampleInputUsername1" class="fw-bold">Nama User</label>
                        <input type="text" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Nama User" name="name" value="{{ old('name', $useredit->name) }}">
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="form-group ">
                        <label for="exampleInputUsername1" class="fw-bold">Email User</label>
                        <input type="email" class="form-control" id="exampleInputUsername1"
                            placeholder="Masukkan Email User" value="{{ old('email', $useredit->email) }}" name="email">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                    </div>
                    <div class="modal-footer">
                        <a href="{{ url('manage_user') }}" class="btn btn-outline-warning btn-icon-text">
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
