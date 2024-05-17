@extends('layout.layout')
@section('content')
    <div class='container'>
        <div class='row'>
            @foreach ($artikel as $artikel)
                <div class="col">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $artikel->foto }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">
                                <a href="artikel/{{ $artikel->id }}">{{ $artikel->judul}}</a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
