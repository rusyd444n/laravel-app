@extends('layout.layout')
@section('content')
    <div class='container'>
        <div class="row justify-content-center">
            <div class=col-md-8>
                <div card="card">
                    <div class="card-header">data penulis
                        <a href="{{ route('genre.index') }}" class="btn btn-sm btn-primary" style="float: right">kembali
                        </a>
                    </div>
                    <div class="card-body">
                         <form action="{{route('genre.store')}}" method="post">
                            @csrf
                            <div class="mb-2">
                                <label for="">nama genre</label>
                                <input type="text" class="form-control @error('nama_genre')is-invalid @enderror"
                                name="nama_genre">
                                @error('nama_genre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                             <div class="mb-2">
                                <button class="btn btn-sm btn-success" type="submit">
                                   simpan
                                </button>
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
