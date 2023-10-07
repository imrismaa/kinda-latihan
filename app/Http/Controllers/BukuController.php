<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;

class BukuController extends Controller
{
    public function tryModel(){
        $data_buku = BukuModel::all();
        $jumlah_data = $data_buku->count('id');
        $total_harga = $data_buku->sum('harga');

        return view('buku.index', compact('data_buku', 'jumlah_data', 'total_harga'));
    }

    public function create() {
        return view('buku.create');
    }

    public function store(Request $request) {
        BukuModel::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'tgl_terbit' => $request->tgl_terbit
        ]);
        return redirect('/buku');
    }

    public function edit($id) {
        $buku = BukuModel::find($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id) {
        $buku = BukuModel::find($id);
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'tgl_terbit' => $request->tgl_terbit
        ]);
        return redirect('/buku');
    }

    public function destroy($id) {
        $buku = BukuModel::find($id);
        $buku->delete();
        return redirect('/buku');
    }

}
