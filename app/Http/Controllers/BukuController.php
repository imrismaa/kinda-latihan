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

}
