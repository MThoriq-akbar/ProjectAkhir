@extends('layout.main')

@section('title','Edit Meja')

@section('content')

<div class="container-fluid">
<div class="card">
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Form Edit Meja</h5>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('meja.update', $meja['id']) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="no_meja" class="form-label">No Meja</label>
                        <select name="no_meja" id="no_meja" class="form-control">
                            <option value="">Pilih No Meja</option>
                            <option value="1" {{ (old('no_meja', $meja['no_meja']) == 1) ? 'selected' : '' }}>1</option>
                            <option value="2" {{ (old('no_meja', $meja['no_meja']) == 2) ? 'selected' : '' }}>2</option>
                            <option value="3" {{ (old('no_meja', $meja['no_meja']) == 3) ? 'selected' : '' }}>3</option>
                            <option value="4" {{ (old('no_meja', $meja['no_meja']) == 4) ? 'selected' : '' }}>4</option>
                            <option value="5" {{ (old('no_meja', $meja['no_meja']) == 5) ? 'selected' : '' }}>5</option>
                        </select>
                        @error('no_meja')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jenis_meja" class="form-label">Jenis Meja</label>
                        <select name="jenis_meja" id="jenis_meja" class="form-control">
                            <option value="">Pilih Jenis Meja</option>
                            <option value="Standar" {{ (old('jenis_meja', $meja['jenis_meja']) == 'Standar') ? 'selected' : '' }}>Standar</option>
                            <option value="Private" {{ (old('jenis_meja', $meja['jenis_meja']) == 'Private') ? 'selected' : '' }}>Private</option>
                            <option value="Family" {{ (old('jenis_meja', $meja['jenis_meja']) == 'Family') ? 'selected' : '' }}>Family</option>
                        </select>
                        @error('jenis_meja')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jumlah_kursi" class="form-label">Jumlah Kursi</label>
                        <input type="number" class="form-control" id="jumlah_kursi" name="jumlah_kursi" value="{{ old('jumlah_kursi', $meja->jumlah_kursi) }}">
                        @error('jumlah_kursi')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="status_meja" class="form-label">Jenis Meja</label>
                        <select name="status_meja" id="status_meja" class="form-control">
                            <option value="">Pilih Status Meja</option>
                            <option value="Kosong" {{ (old('status_meja', $meja['status_meja']) == 'Kosong') ? 'selected' : '' }}>Kosong</option>
                            <option value="Terisi" {{ (old('status_meja', $meja['status_meja']) == 'Terisi') ? 'selected' : '' }}>Terisi</option>

                        </select>
                        @error('status_meja')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('meja.index') }}" class="btn btn-transparant">Cancel</a>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
