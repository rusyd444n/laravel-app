@extends('layout.layout')
@section('content')
    <div class='container'>
        <div class="row justify-content-center">
            <div class=col-md-8>
                <div card="card">
                    <div class="card-header">data penulis
                        <a href="{{ route('buku.index') }}" class="btn btn-sm btn-primary" style="float: right">kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                          <label for="">judul :</label>
                         <b>{{$buku->judul}}</b>
                        </div>
                        <div class="mb-2">
                            <img src="{{asset('/images/buku/'. $buku->cover)}}" alt="" style="width: 200px;">
                        </div>

                        <div class="mb-2">
                              <label for="">penulis : </label>
                             <b>{{$buku->penulis->nama_penulis}}</b>
                        </div>

                        <div class="mb-2">
                              <label for="">tanggal terbit :</label>
                             <b>{{date('d-M-Y', strtotime($buku->tgl_terbit))}}</b>
                        </div>
                         <div class="mb-2">
                              <label for="">jumlah halaman :</label>
                             <b>{{$buku->jml_halaman}}</b>halaman
                        </div>

                            <div class="mb-2">
                              <label for="">genre :</label>
                               <ol>
                                @foreach ($buku->genre as $genre)
                                   <li>{{$genre->nama_genre}}</li>
                                @endforeach
                               </ol>
                            </div>

                            <div class="mb-2">
                                  <label for="">deskripsi buku</label>
                                 <b>{{$buku->judul}}</b>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
