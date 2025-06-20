<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menu = Menu::all();
        return view('menu.index')->with('menu', $menu);
    }

    public function create(Request $request)
    {
        if ($request->user()->cannot('create', Menu::class)){
            abort(403);
        }
        $kategori = Kategori::all();
        return view('menu.create')->with('kategori', $kategori);
    }

    public function store(Request $request)
    {
        if ($request->user()->cannot('store', Menu::class)){
            abort(403);
        }
        $val = $request -> validate([
            'kategori_id' => "required",
            'kode_menu' => "required|max:25",
            'url_menu' => "required|url",
            'nama_menu' => "required|max:25",
            'harga_menu' => "required",
        ]);

        Menu::create($val);
        return redirect()->route('menu.index')->with('success', $val['nama_menu'].' berhasil disimpan');
    }

    public function show(Menu $menu)
    {
        //
    }

    public function edit(Menu $menu, Request $request)
    {
        if ($request->user()->cannot('edit', Menu::class)){
            abort(403);
        }
        $kategori = Kategori::all();
        return view('menu.edit')->with('menu', $menu)->with('kategori', $kategori);
    }

    public function update(Request $request, Menu $menu)
    {
        if ($request->user()->cannot('update', Menu::class)){
            abort(403);
        }
        $val = $request -> validate([
            'kategori_id' => "required",
            'kode_menu' => "required|max:25",
            'url_menu' => "required|url",
            'nama_menu' => "required|max:25",
            'harga_menu' => "required",
        ]);

        $menu -> update($val);
        return redirect()->route('menu.index')->with('success', $val['nama_menu'].' berhasil diperbarui');
    }

    public function destroy($id)
    {
        $menu = Menu::findOrFail($id);
        $menu->delete();

        return redirect()->route('menu.index')->with('success', 'Menu berhasil dihapus');
    }
}
