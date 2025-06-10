@extends('layout.main')

@section('title','Edit Reservasi')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Edit Reservasi</h5>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('reservasi.update', $reservasi->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="meja_id" class="form-label">Nomor Meja</label>
                            <select name="meja_id" id="meja_id" class="form-control">
                                <option value="">Pilih Meja</option>
                                @foreach ($meja as $item)
                                    <option value="{{ $item['id'] }}" {{ $reservasi['meja_id'] == $item['id'] ? 'selected' : '' }}>
                                        Meja {{ $item['jenis_meja'] }}  No. {{ $item->no_meja }}
                                    </option>
                                @endforeach
                            </select>
                            @error('meja_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nama_pemesan" class="form-label">Nama Pemesan</label>
                            <input type="text" class="form-control" id="nama_pemesan" name="nama_pemesan" value="{{ old('nama_pemesan', $reservasi->nama_pemesan) }}">
                            @error('nama_pemesan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="nohp" class="form-label">Nomor HP</label>
                            <input type="text" class="form-control" id="nohp" name="nohp" value="{{ old('nohp', $reservasi->nohp) }}">
                            @error('nohp')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tanggal" class="form-label">Tanggal Reservasi</label>
                            <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ old('tanggal', $reservasi->tanggal) }}">
                            @error('tanggal')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        @can('text', App\Reservasi::class)
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="Pending" {{ $reservasi->status == 'Pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="Dikonfirmasi" {{ $reservasi->status == 'Dikonfirmasi' ? 'selected' : '' }}>Dikonfirmasi</option>
                                    <option value="Selesai" {{ $reservasi->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                                    <option value="Batal" {{ $reservasi->status == 'Batal' ? 'selected' : '' }}>Batal</option>
                                </select>
                                @error('status')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        @endcan

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('reservasi') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
