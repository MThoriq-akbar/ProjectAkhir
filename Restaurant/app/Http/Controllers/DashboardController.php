<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Menu;
use App\Models\Pembayaran;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil jumlah data dari database
        $jumlahMenu = Menu::count();
        $jumlahPembayaran = Pembayaran::count();
        $jumlahMeja = Meja::count();

        // Kirim ke view dashboard
        return view('dashboard', compact('jumlahMenu', 'jumlahPembayaran', 'jumlahMeja'));
    }
}
