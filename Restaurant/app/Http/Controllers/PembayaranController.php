<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use App\Models\Menu;
use App\Models\Pembayaran;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view('pembayaran.index')->with('pembayaran', $pembayaran);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reservasi = Reservasi::all();
        $kasir = Kasir::all();
        $menu = Menu::all();

        return view('pembayaran.create')->with('reservasi', $reservasi)->with('kasir', $kasir)->with('menu', $menu);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request -> validate([
            'reservasi_id'  => 'required',
            'kasir_id'      => 'required',
            'menu_id'       => 'required',
            'metode'        => 'required',
            'jumlah'        => 'required|min:1'
        ]);

        Pembayaran::create($val);
        return redirect()->route('pembayaran.index')->with('success','Pembayaran berhasil disimpan');

    }

    /**
     * Display the specified resource.
     */
    public function show(Pembayaran $pembayaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pembayaran $pembayaran)
    {
        $reservasi = Reservasi::all();
        $kasir = Kasir::all();
        $menu = Menu::all();

        return view('pembayaran.edit')->with('pembayaran', $pembayaran)->with('reservasi', $reservasi)->with('kasir', $kasir)->with('menu', $menu);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pembayaran $pembayaran)
    {
        $val = $request -> validate([
            'reservasi_id'  => 'required',
            'kasir_id'      => 'required',
            'menu_id'       => 'required',
            'metode'        => 'required',
            'jumlah'        => 'required|min:1'
        ]);

        $pembayaran -> update($val);
        return redirect()->route('pembayaran.index')->with('success','Pembayaran berhasil diPerbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pembayaran $pembayaran)
    {
        //
    }
}
