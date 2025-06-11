@extends('layout.main')

@section('title', 'Dashboard')

@section('content')

<h1> Dashboard</h1>

    <div style="display: flex; gap: 2rem; justify-content: center;">
        <div style="padding: 1rem; border: 1px solid #ccc; border-radius: 8px; width: 300px; text-align: center;">
            <h2>Jumlah Menu</h2>
            <p style="font-size: 2rem; font-weight: bold;">{{ $jumlahMenu }}</p>
        </div>

        <div style="padding: 1rem; border: 1px solid #ccc; border-radius: 8px; width: 300px; text-align: center;">
            <h2>Jumlah Meja</h2>
            <p style="font-size: 2rem; font-weight: bold;">{{ $jumlahMeja }}</p>
        </div>

        <div style="padding: 1rem; border: 1px solid #ccc; border-radius: 8px; width: 300px; text-align: center;">
            <h2>Jumlah Pembayaran</h2>
            <p style="font-size: 2rem; font-weight: bold;">{{ $jumlahPembayaran }}</p>
        </div>
    </div>

@endsection
