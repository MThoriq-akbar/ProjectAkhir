@extends('layout.main')

@section('title', 'Edit Pembayaran')

@section('content')

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Form Edit Pembayaran</h5>
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('pembayaran.update', $pembayaran->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="reservasi_id" class="form-label">Nama Pemesan</label>
                            <select name="reservasi_id" id="reservasi_id" class="form-control">
                                <option value="">Pilih Nama Reservasi</option>
                                @foreach($reservasi as $item)
                                    <option value="{{ $item['id'] }}" {{ $pembayaran->reservasi_id == $item['id'] ? 'selected' : '' }}>
                                        {{ $item['nama_pemesan'] }}
                                    </option>
                                @endforeach
                            </select>
                            @error('reservasi_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="kasir_id" class="form-label">Nama Kasir</label>
                            <select name="kasir_id" id="kasir_id" class="form-control">
                                <option value="">Pilih Nama Kasir</option>
                                @foreach($kasir as $item)
                                    <option value="{{ $item['id'] }}" {{ $pembayaran->kasir_id == $item['id'] ? 'selected' : '' }}>
                                        {{ $item['no_kasir'] }} - {{ $item['nama_kasir'] }}
                                    </option>
                                @endforeach
                            </select>
                            @error('kasir_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="menu_id" class="form-label">Menu</label>
                            <select name="menu_id" id="menu_id" class="form-control">
                                <option value="">Pilih Menu</option>
                                @foreach($menu as $item)
                                    <option value="{{ $item['id'] }}" {{ $pembayaran->menu_id == $item['id'] ? 'selected' : '' }}>
                                        {{ $item['nama_menu'] }} - {{ $item['harga_menu'] }}
                                    </option>
                                @endforeach
                            </select>
                            @error('menu_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="metode" class="form-label">Metode Pembayaran</label>
                            <select name="metode" id="metode" class="form-control">
                                <option value="">Pilih Metode Pembayaran</option>
                                <option value="Cash" {{ $pembayaran->metode == 'Cash' ? 'selected' : '' }}>Cash</option>
                                <option value="Transfer" {{ $pembayaran->metode == 'Transfer' ? 'selected' : '' }}>Transfer</option>
                            </select>
                            @error('metode')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah</label>
                            <input type="number" class="form-control" id="jumlah" name="jumlah" value="{{ $pembayaran->jumlah }}">
                            @error('jumlah')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ route('pembayaran.index') }}" class="btn btn-transparant">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
