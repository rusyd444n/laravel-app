@extends('layout.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Daftar hewan</div>
                <div class="card-body">
                    <ol>
                        @foreach ($Hewan as $item)
                        @if($item == 'Crocodile')
                        <li>{{$item}} - hewan setia rawr</li>
                        @else
                        <li>{{$item}}</li>
                        @endif
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection