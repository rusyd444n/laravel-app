<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function getArtikel(){
        $artikel = Artikel::all();
        return view('artikel.tampil',compact ('artikel'));
    }
    public function getArtikelById($id){
        $artikel = Artikel::findOrFail($id);
        return view('artikel.index',compact ('artikel'));
    }
    public function getArtikelByKategori($kategori){
        // menampilkan data berdasarkan kategori yang di pilih
        $artikel = Artikel::where('kategori', $kategori)->get();
        return view('artikel.Kategori', compact('artikel'));
    }
}
