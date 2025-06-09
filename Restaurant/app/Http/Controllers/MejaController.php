<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $meja = Meja::all();
        return view('meja.index')->with('meja',$meja);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('meja.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $val = $request -> validate([
            'no_meja' => "required|numeric",
            'jumlah_kursi' => "required|integer|between:1,8",
            'jenis_meja' => "required",
        ]);

        Meja::create($val);
        return redirect()->route('meja.index')->with('success', $val['no_meja'].' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Meja $meja)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Meja $meja)
    {
        return view('meja.edit')->with('meja', $meja);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Meja $meja)
    {
        $val = $request -> validate([
            'no_meja' => "required|numeric",
            'jumlah_kursi' => "required|integer|between:1,8",
            'jenis_meja' => "required",
            'status_meja' => "required",
        ]);

        $meja -> update($val);
        return redirect()->route('meja.index')->with('success', $val['no_meja'].' berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $meja = Meja::findOrFail($id);
        $meja->delete();

        return redirect()->route('meja.index')->with('success', 'Meja berhasil dihapus');
    }
}
