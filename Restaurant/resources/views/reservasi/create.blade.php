@extends('layout.main')

@section('title','Tambah Reservasi')

@section('content')

<div class="container-fluid">
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Form Tambah Reservasi</h5>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('reservasi.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="meja_id" class="form-label">No Meja</label>
                        <select name="meja_id" id="meja_id" class="form-control">
                            <option value="">Pilih Meja</option>
                            @foreach($meja as $item)
                                <option value="{{ $item['id'] }}" {{ old('meja_id') == $item['id'] ? 'selected' : '' }}>
                                    Meja  {{ $item['jenis_meja'] }} No. {{ $item['no_meja'] }}
                                </option>
                            @endforeach
                        </select>
                        @error('meja_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" value="{{ old('nama_pemesan') }}" placeholder="Masukkan Nama Pemesan">
                        @error('nama_pemesan')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nohp" class="form-label">Nomor HP</label>
                        <input type="number" class="form-control" id="nohp" name="nohp" value="{{ old('nohp') }}" placeholder="Masukkan Nomor HP">
                        @error('nohp')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tanggal" class="form-label">Tanggal Reservasi</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal') }}">
                        @error('tanggal')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ url('reservasi') }}" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
