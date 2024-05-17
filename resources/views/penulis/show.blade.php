@extends('layout.layout')
@section('content')
    <div class='container'>
        <div class="row justify-content-center">
            <div class=col-md-8>
                <div card="card">
                    <div class="card-header">data penulis
                        <a href="{{ route('penulis.index') }}" class="btn btn-sm btn-primary" style="float: right">kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                          <label for="">nama penulis</label>
                          <input type="text" class="form-control @error('nama_penulis') is-invalid @enderror"
                          name="nama_penulis" value="{{$penulis->nama_penulis}}" disabled>
                        </div>
                        <div class="mb-2">
                            <label for="">bio penulis</label>
                            <textarea class="form-control" name="bio" disabled>{{$penulis->bio}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
