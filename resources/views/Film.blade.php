{{-- @php
$film = \App\Models\Film::all();
$orangTua = \App\Models\Film::find(1);
$anak = \App\Models\DetailFilm::find(1);

@endphp

<h1>Daftar Film</h1>
{{-- Menampilkan Semua Data --}}
{{-- @foreach ($film as $data)
<h3>ID Film : {{$data->id}}</h3>
<h3>Judul : {{$data->judul}}</h3>
<a href="{{ url('film/' .$data->id)}}">Klik Disini</a>
<hr>

@endforeach --}}
{{-- Menampilkan Salah Satu Data (Menggunakan Variabel orangTua) --}}
{{-- <h1 style="color: royalblue">Singel Film</h1>
<h3>ID Film : {{$orangTua->id}}</h3>
<h3>Judul Film : {{$orangTua->judul}}</h3>
<h3>Deskripsi : {{$orangTua->deskripsi}}</h3>
<h3>Detail Film</h3>
<h4>Code Film : {{$orangTua->DetailFilm->code_film}} </h4>
<h4>Url IMDB : {{$orangTua->DetailFilm->url_imdb}} </h4>
<hr> --}}


{{-- Menampilan Salah Satu Data (Menggunakan Variabel anak) --}}
{{-- <h1 style="color: yellow">Singel Film (ForeignKey) </h1>
<h3>ID Film : {{$anak->Film->id}}</h3>
<h3>Judul Film : {{$anak->Film->judul}}</h3>
<h3>Deskripsi : {{$anak->Film->deskripsi}}</h3>
<h3>Detail Film</h3>
<h4>Code Film : {{$anak->code_film}} </h4>
<h4>Url IMDB : {{$anak->url_imdb}} </h4>
<hr> --}}


{{-- Menampilkan Salah Satu Data (Menggunakan Variabel mediaFilm) --}}
{{-- @foreach ($media as $mediaFilm)

<h1 style="color: green">Media Film </h1>
<h3>ID Media : {{$mediaFilm->id}} </h3>
<h3>ID Film : {{$mediaFilm->Film->id}}</h3>
<h3>Judul : {{$mediaFilm->media_title}}</h3>
<h3>Jenis Media : {{$mediaFilm->media_type}}</h3>
<h3>Url Media : {{$mediaFilm->url_media}}</h3>
<hr>
@endforeach --}}

@extends('layout.layout')
@section('content')
@php
$film = \App\Models\Film::all();
@endphp

<div class="album py-5 bg-light">
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            @foreach ($film as $item)
            <div class="col">
                <div class="card shadow-sm">
                    <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                            dy=".3em">{{$item->judul}}</text>
                    </svg>

                    <div class="card-body">
                        <p class="card-text">{{$item->deskripsi}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="btn-group">
                                <a href="{{ url('film/' .$item->id)}}" type="button" class="btn btn-sm btn-outline-secondary">View</a>
                            </div>
                            <small class="text-muted">9 mins</small>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
@endsection