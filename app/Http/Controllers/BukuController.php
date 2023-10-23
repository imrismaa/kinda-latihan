<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BukuModel;

class BukuController extends Controller
{
    public function index(){
        $batas = 5;
        $data_buku = BukuModel::paginate($batas);
        $jumlah_data = $data_buku->count('id');
        $total_harga = $data_buku->sum('harga');
        $no = $batas * ($data_buku->currentPage() - 1);

        return view('buku.index', compact('data_buku', 'jumlah_data', 'total_harga', 'no'));
    }

    public function create() {
        return view('buku.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'judul' => 'required|string',
            'penulis' => 'required|string',
            'harga' => 'required|numeric',
            'tgl_terbit' => 'required|date'
        ]);
        BukuModel::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'harga' => $request->harga,
            'tgl_terbit' => $request->tgl_terbit
        ]);
        return redirect('/buku')->with('stored_message', 'Data buku berhasil ditambahkan');
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
        return redirect('/buku')->with('edited_message', 'Data buku berhasil diubah');
    }

    public function destroy($id) {
        $buku = BukuModel::find($id);
        $buku->delete();
        return redirect('/buku')->with('deleted_message', 'Data buku berhasil dihapus');
    }

    public function search(Request $request) {
        $batas = 5;
        $cari = $request->kata;
        $data_buku = BukuModel::where('judul', 'like', "%".$cari."%")->orwhere('penulis', 'like', "%".$cari."%")->paginate($batas);
        $jumlah_data = $data_buku->count('id');
        $total_harga = $data_buku->sum('harga');
        $no = $batas * ($data_buku->currentPage() - 1);

        return view('buku.search', compact('data_buku', 'jumlah_data', 'cari', 'no', 'total_harga'));
    }

}
