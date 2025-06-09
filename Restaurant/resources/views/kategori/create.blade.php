@extends('layout.main')

@section('title','Tambah Kategori')

@section('content')

<div class="container-fluid">
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Form Tambah Kategori</h5>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('kategori.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_kategori" class="form-label">Nama Kategori</label>
                        <input type="text" id="nama_kategori" name="nama_kategori" class="form-control" placeholder="Masukan Nama Kategori">
                        @error('nama_kategori')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ url('kategori') }}" class="btn btn-transparant"> Cancel </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
