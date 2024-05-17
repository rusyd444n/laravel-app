@extends('layout.layout')
@section('content')
    <div class='container'>
        <div class="row justify-content-center">
            <div class=col-md-8>
                <div card="card">
                    <div class="card-header">data penulis
                        <a href="{{ route('penulis.index')}}" class="btn btn-sm btn-primary" style="float: right">kembali
                        </a>
                    </div>
                    <div class="card-body">
                         <form action="{{route('penulis.update', $penulis->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-2">
                                <label for="">nama penulis</label>
                                <input type="text" class="form-control @error('nama_penulis')is-invalid @enderror"
                                name="nama_penulis" value="{{$penulis->nama_penulis}}">
                                @error('nama_penulis')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-2">
                                <label for="">bio penulis</label>
                                <textarea class="form-control @error('bio')is-invalid @enderror"
                                name="bio">{{$penulis->bio}}</textarea>
                                @error('bio')
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
