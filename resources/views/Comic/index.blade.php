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
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Add New Comic</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
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
                            <td><a class="btn btn-primary" href="{{ route('comics.show', $comic) }}">View</a></td>
                            <td><a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Edit</a></td>
                            <td>
                                        <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input class="btn btn-danger" type="submit" value="Delete">
                                        </form>
                                    </td>
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