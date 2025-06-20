<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use Illuminate\Http\Request;

class MejaController extends Controller
{
    public function index()
    {
        $meja = Meja::all();
        return view('meja.index')->with('meja',$meja);
    }

    public function create(Request $request)
    {
        if ($request->user()->cannot('create', Meja::class)){
            abort(403);
        }
        return view('meja.create');
    }

    public function store(Request $request)
    {
        if ($request->user()->cannot('store', Meja::class)){
            abort(403);
        }

        $val = $request -> validate([
            'no_meja' => "required|numeric",
            'jumlah_kursi' => "required|integer|between:1,8",
            'jenis_meja' => "required",
        ]);

        Meja::create($val);
        return redirect()->route('meja.index')->with('success', $val['no_meja'].' berhasil disimpan');
    }

    public function show(Meja $meja)
    {
        //
    }

    public function edit(Meja $meja,Request $request)
    {
        if ($request->user()->cannot('edit', Meja::class)){
            abort(403);
        }
        return view('meja.edit')->with('meja', $meja);
    }

    public function update(Request $request, Meja $meja)
    {
        if ($request->user()->cannot('update', Meja::class)){
            abort(403);
        }
        $val = $request -> validate([
            'no_meja' => "required|numeric",
            'jumlah_kursi' => "required|integer|between:1,8",
            'jenis_meja' => "required",
            'status_meja' => "required",
        ]);

        $meja -> update($val);
        return redirect()->route('meja.index')->with('success', $val['no_meja'].' berhasil diupdate');
    }

    public function destroy($id)
    {
        $meja = Meja::findOrFail($id);
        $meja->delete();

        return redirect()->route('meja.index')->with('success', 'Meja berhasil dihapus');
    }
}
