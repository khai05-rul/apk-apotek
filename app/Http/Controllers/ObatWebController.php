<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatWebController extends Controller
{
    public function index() {
        $obat = Obat::all();
        return view('obat.index', compact('obat'));
    }
    public function create() {
        return view('obat.create');
    }
    public function store(Request $request) {
        Obat::create($request->all());
        return redirect('/obat')->with('success', 'Data obat berhasil ditambahkan!');
    }
    public function edit($id) {
        $obat = Obat::findOrFail($id);
        return view('obat.edit', compact('obat'));
    }
    public function update(Request $request, $id) {
        $obat = Obat::findOrFail($id);
        $obat->update($request->all());
        return redirect('/obat')->with('success', 'Data obat berhasil diperbarui!');
    }
    public function destroy($id) {
        $obat = Obat::findOrFail($id);
        $obat->delete();
        return redirect('/obat')->with('success', 'Data obat berhasil dihapus!');
    }
}