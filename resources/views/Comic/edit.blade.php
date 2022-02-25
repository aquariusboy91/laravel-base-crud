@extends('layouts.base')

@section('documentTitle')
    Modify {{ $comic->titolo }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Modify {{ $comic->titolo }}</h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <form action="{{ route('comics.update', $comic->id) }}" method="post">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label for="name" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="titolo" name="titolo" value="{{ $comic->titolo }}">
                        @error('titolo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Editore</label>
                        <input type="text" class="form-control" id="editore" name="editore" value="{{ $comic->editore }}">
                        @error('editore')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="series" class="form-label">Trama</label>
                        <input type="text" class="form-control" id="trama" name="trama" value="{{ $comic->trama }}">
                        @error('trama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="color" class="form-label">Numero</label>
                        <input type="text" class="form-control" id="numero" name="numero" value="{{ $comic->numero }}">
                        @error('numero')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Photo</label>
                        <input type="text" class="form-control" id="photo" name="photo" value="{{ $comic->photo }}">
                        @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="refill" class="form-label">Data Uscita</label>
                        <input type="text" class="form-control" id="data_uscita" name="data_uscita" value="{{ $comic->data_uscita }}">
                        @error('data_uscita')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body_material" class="form-label">Prezzo</label>
                        <input type="text" class="form-control" id="prezzo" name="prezzo"
                            value="{{ $comic->prezzo }}">
                            @error('prezzo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    

                    <input type="submit" class="btn btn-primary" value="Salva">
                </form>
            </div>
        </div>
    </div>
@endsection