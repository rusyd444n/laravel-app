<?php

namespace App\Http\Controllers;

use App\Models\penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $penulis = penulis::orderBy('id','desc')->get();
        return view('penulis.index', compact('penulis'));
    }

    public function create()
    {
        return view('penulis.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_penulis' => 'required|max:255',
            'bio' => 'required'
        ]);

        $penulis = new penulis();
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->bio = $request->bio;
        $penulis->save();

        return redirect()->route('penulis.index')
            ->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {
        $penulis = penulis::findOrFail($id);
        return view('penulis.show', compact('penulis'));
    }

    public function edit($id)
    {
        $penulis = penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_penulis' => 'required|max:255',
            'bio' => 'required',
        ]);

        $penulis = penulis::findOrFail($id);
        $penulis->nama_penulis = $request->nama_penulis;
        $penulis->bio = $request->bio;
        $penulis->save();

        return redirect()->route('penulis.index')
            ->with('success', 'Data berhasil diubah');
    }

    public function destroy($id)
    {
        $penulis = penulis::findOrFail($id);
        $penulis->delete();

        return redirect()->route('penulis.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
