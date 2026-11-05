<?php

namespace App\Http\Controllers;

use App\Models\StafApotek;
use Illuminate\Http\Request;

class StafWebController extends Controller
{
    public function index() {
        $staf = StafApotek::all();
        return view('staf.index', compact('staf'));
    }
    public function create() {
        return view('staf.create');
    }
    public function store(Request $request) {
        StafApotek::create($request->all());
        return redirect('/staf-apotek')->with('success', 'Data staf berhasil ditambahkan!');
    }
    public function edit($id) {
        $staf = StafApotek::findOrFail($id);
        return view('staf.edit', compact('staf'));
    }
    public function update(Request $request, $id) {
        $staf = StafApotek::findOrFail($id);
        $staf->update($request->all());
        return redirect('/staf-apotek')->with('success', 'Data staf berhasil diperbarui!');
    }
    public function destroy($id) {
        $staf = StafApotek::findOrFail($id);
        $staf->delete();
        return redirect('/staf-apotek')->with('success', 'Data staf berhasil dihapus!');
    }
}