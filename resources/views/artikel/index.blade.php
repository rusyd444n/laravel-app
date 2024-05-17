@extends('layout.layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col" style="width: 5rem;">
                <div class="card">
                    <img width="350" height="500" src="{{ $artikel->foto}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text"><b>{{ $artikel->judul }}</b></p>
                        <p>Kategori : <a href="{{ url('artikel/kategori/'. $artikel->kategori) }}">{{ $artikel->kategori }}</a></p>
                        <p>konten   : {{ $artikel->konten }}</p>
                        <p>Penulis  : {{ $artikel->penulis }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
