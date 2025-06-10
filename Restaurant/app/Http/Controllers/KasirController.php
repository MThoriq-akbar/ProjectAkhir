<?php

namespace App\Http\Controllers;

use App\Models\Kasir;
use Illuminate\Http\Request;

class KasirController extends Controller
{
    public function index()
    {
        $kasir = Kasir::all();
        return view('kasir.index')->with('kasir', $kasir);
    }

    public function create(Request $request)
    {
        if ($request->user()->cannot('create', Kasir::class)){
            abort(403);
        }
        return view('kasir.create');
    }

    public function store(Request $request)
    {
        if ($request->user()->cannot('store', Kasir::class)){
            abort(403);
        }
        $val = $request -> validate([
            'no_kasir'      => "required",
            'nama_kasir'    => "required|max:25",
            'nohp'          => "required",
        ]);

        Kasir::create($val);
        return redirect()->route('kasir.index')->with('success', $val['nama_kasir'].' berhasil disimpan');
    }

    public function show(Kasir $kasir)
    {
        //
    }

    public function edit(Kasir $kasir,Request $request)
    {
        if ($request->user()->cannot('edit', Kasir::class)){
            abort(403);
        }
        return view('kasir.edit')->with('kasir', $kasir);
    }

    public function update(Request $request, Kasir $kasir)
    {
        if ($request->user()->cannot('update', Kasir::class)){
            abort(403);
        }

        $val = $request -> validate([
            'no_kasir'      => "required",
            'nama_kasir'    => "required|max:25",
            'nohp'          => "required",
        ]);

        $kasir -> update($val);
        return redirect()->route('kasir.index')->with('success', $val['nama_kasir'].' berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kasir = Kasir::findOrFail($id);
        $kasir->delete();

        return redirect()->route('kasir.index')->with('success', 'Kasir berhasil dihapus');
    }
}
