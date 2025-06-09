@extends('layout.main')

@section('title','Tambah Menu')

@section('content')

<div class="container-fluid">
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Form Tambah Menu</h5>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('menu.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="nama_menu" class="form-label">Nama Menu</label>
                        <input type="text" class="form-control" id="nama_menu" name="nama_menu" placeholder="Nama Menu" value="{{ old('nama_menu') }}">
                        @error('nama_menu')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kode_menu" class="form-label">Kode Menu</label>
                        <input type="text" class="form-control" id="kode_menu" name="kode_menu" placeholder="Kode Menu" value="{{ old('kode_menu') }}">
                        @error('kode_menu')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="kategori_id" class="form-label">Kategori</label>
                        <select name="kategori_id" id="kategori_id" class="form-control">
                            <option value="" readonly>Pilih Kategori</option>
                            @foreach ($kategori as $items)
                                <option value="{{ $items['id'] }}" {{ old('kategori_id') == $items['id'] ? 'selected' : '' }}>
                                    {{ $items['nama_kategori'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="harga_menu" class="form-label">Harga Menu</label>
                        <input type="text" class="form-control" id="harga_menu" name="harga_menu" placeholder="Harga Menu" value="{{ old('harga_menu') }}">
                        @error('harga_menu')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="url_menu" class="form-label">URL Foto Menu</label>
                        <input type="url" class="form-control" id="url_menu" name="url_menu" placeholder="URL Foto" value="{{ old('url_menu') }}">
                        @error('url_menu')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ url('menu') }}" class="btn btn-transparant">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
