@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="h1">Fumetti</h1>
        </div>
        <div class="row">
            <div class="col">
                <a href="{{ route('Comic.create') }}" class="btn btn-primary">Add new keyboard</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                 <table class="table table-primary">
                    <thead>
                        <tr class="table-primary">
                            <th>Titolo</th>
                            <th>Editore</th>
                            <th>Prezzo</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{ $comic->titolo }}</td>
                            <td>{{ $comic->editore }}</td>
                            <td>{{ $comic->prezzo }} €</td>
                            <td><a class="btn btn-primary" href="{{ route('Comic.show', $comic) }}">View</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col">
                {{ $comics->links() }}
            </div>
        </div>
    </div>
   
@endsection