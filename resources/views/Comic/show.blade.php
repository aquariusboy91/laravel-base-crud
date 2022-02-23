@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                 <h1>{{ $comic->titolo }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
              <img class="fluid-img" src=" {{$comic->photo }}" alt="{{$comic->name}}">
            </div>
            <div class="col">
              <div>{{ $comic->editore }}</div>
              <div><h2>{{  $comic->prezzo }} €</h2></div>
            </div>
        </div>
    </div>
   
@endsection