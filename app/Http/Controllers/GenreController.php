<?php

namespace App\Http\Controllers;

use App\Models\Genre;
// use App\Http\Requests\StoreGenreRequest;
// use App\Http\Requests\UpdateGenreRequest;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $genre = Genre::orderBy('id','desc')->get();
        return view('genre.index', compact('genre'));
    }


    public function create()
    {
        return view('genre.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGenreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_genre' => 'required|max:255'
        ]);

        $genre = new Genre();
        $genre->nama_genre = $request->nama_genre;
        $genre->save();

        return redirect()->route('genre.index')
            ->with('success', 'Data berhasil ditambahkan');
    }


    public function show($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.show', compact('genre'));
    }


    public function edit($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGenreRequest  $request
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'nama_genre' => 'required|max:255',
        ]);

        $genre = Genre::findOrFail($id);
        $genre->nama_penulis = $request->nama_genre;
        $genre->save();

        return redirect()->route('genre.index')
            ->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Genre  $genre
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();

        return redirect()->route('genre.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
