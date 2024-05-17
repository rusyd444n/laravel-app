@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
           <div class="card">
              <div class="card-header">
             perkenalan
            </div>
            <div class="card-body">
                <p>Nama: {{$data['Nama']}}</p>
                <p>agama: {{$data['Agama']}}</p>
                <p>Alamat: {{$data['Alamat']}}</p>
                <p>Jenis kelamin: {{$data['Jk']}}</p>
                <p></p>
                <p>hobi</p>
                <ol>
                    @foreach($data['Hobi'] as $item)
                    <li>{{$item}}</li>
                    @endforeach
                </ol>
             </div>
           </div>
        </div>
    </div>
</div>
@endsection