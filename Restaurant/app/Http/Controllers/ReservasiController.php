<?php

namespace App\Http\Controllers;

use App\Models\Meja;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    public function index()
    {
        $reservasi = Reservasi::all();
        return view('reservasi.index')->with('reservasi', $reservasi);
    }

    public function create()
    {
        $meja = Meja::all();
        return view('reservasi.create')->with('meja', $meja);
    }
    function store(Request $request)
    {
        $val = $request -> validate([
            'meja_id' => "required",
            'nama_pemesan' => "required|max:25",
            'nohp' => "required",
            'tanggal' => "required|date"
        ]);

        Reservasi::create($val);
        return redirect()->route('reservasi.index')->with('success', $val['nama_pemesan'].' berhasil disimpan');
    }

    public function show(Reservasi $reservasi)
    {
        //
    }

    public function edit(Reservasi $reservasi)
    {
        $meja = Meja::all();
        return view('reservasi.edit')->with('reservasi', $reservasi)->with('meja', $meja);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'meja_id' => 'required',
            'nama_pemesan' => 'required',
            'nohp' => 'required',
            'tanggal' => 'required|date',
            'status' => 'required'
        ]);

        $reservasi = Reservasi::findOrFail($id);
        $reservasi->update($request->all());

        // Cek status setelah update
        if ($request->status == 'Dikonfirmasi') {
            // Update status meja jadi Terisi
            $meja = Meja::find($reservasi->meja_id);
            if ($meja) {
                $meja->status_meja = 'Terisi';
                $meja->save();
            }
        } elseif ($request->status == 'Selesai' || $request->status == 'Batal') {
            // Kalau reservasi selesai atau batal, meja jadi kosong
            $meja = Meja::find($reservasi->meja_id);
            if ($meja) {
                $meja->status_meja = 'Kosong';
                $meja->save();
            }
        }

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil diupdate!');
    }


    public function destroy($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        $reservasi->delete();

        return redirect()->route('reservasi.index')->with('success', 'Reservasi berhasil dihapus');
    }
}
