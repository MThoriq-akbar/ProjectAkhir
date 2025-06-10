<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kategori = Kategori::all();
        return view('kategori.index')->with('kategori',$kategori);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->user()->cannot('create', Kategori::class)){
            abort(403);
        }
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->user()->cannot('store', Kategori::class)){
            abort(403);
        }
        $val = $request -> validate([
            'nama_kategori' => "required",
        ]);

        Kategori::create($val);
        return redirect()->route('kategori.index')->with('success', $val['nama_kategori'].' berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategori $kategori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategori $kategori,Request $request)
    {
        if ($request->user()->cannot('edit', Kategori::class)){
            abort(403);
        }
        return view('kategori.edit')->with('kategori', $kategori);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategori $kategori)
    {
        if ($request->user()->cannot('update', Kategori::class)){
            abort(403);
        }
        $val = $request -> validate([
            'nama_kategori' => "required",
        ]);

        $kategori -> update($val);
        return redirect()->route('kategori.index')->with('success', $val['nama_kategori'].' berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('kategori.index')->with('success', 'Kategori berhasil dihapus');
    }
}
