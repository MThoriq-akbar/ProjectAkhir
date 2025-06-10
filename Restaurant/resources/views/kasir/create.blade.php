@extends('layout.main')

@section('title','Tambah Kasir')

@section('content')

<div class="container-fluid">
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Form Tambah Kasir</h5>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('kasir.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="no_kasir" class="form-label">No Kasir</label>
                        <input type="number" id="no_kasir" name="no_kasir" class="form-control" value="{{ old('no_kasir') }}" placeholder="Masukan Nomor Kasir">
                        @error('no_kasir')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nama_kasir" class="form-label">Nama Kasir</label>
                        <input type="text" id="nama_kasir" name="nama_kasir" class="form-control" value="{{ old('nama_kasir') }}" placeholder="Masukan Nama Kasir">
                        @error('nama_kasir')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="nohp" class="form-label">No Telepon</label>
                        <input type="number" id="nohp" name="nohp" class="form-control" value="{{ old('nohp') }}" placeholder="Masukan No Telepon Kasir">
                        @error('nohp')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ url('kasir') }}" class="btn btn-transparant"> Cancel </a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
