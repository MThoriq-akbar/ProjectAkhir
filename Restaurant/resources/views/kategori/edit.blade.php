@extends('layout.main')

@section('title','Edit Kategori')

@section('content')

<div class="container-fluid">
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Form Edit Kategori</h5>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('kategori.update', $kategori['id']) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ old('nama_kategori', $kategori['nama_kategori']) }}">
                        @error('nama_kategori')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
