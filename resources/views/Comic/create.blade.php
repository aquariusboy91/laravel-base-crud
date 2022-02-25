@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')

<div class="container">
        <div class="row">
          <form action="{{ route('comics.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
              <label for="titolo" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="titolo" name="titolo">
              @error('titolo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            <div class="mb-3">
              <label for="editore" class="form-label">Editore</label>
              <input type="text" class="form-control" id="editore" name="editore">
              @error('editore')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            <div class="mb-3">
                <label for="trama" class="form-label">Trama</label>
                <textarea class="form-control" id="trama" name="trama" rows="3"></textarea>
                @error('trama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            <div class="mb-3">
              <label for="numero" class="form-label">Numero</label>
              <input type="text" class="form-control" id="numero" name="numero">
              @error('numero')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            <div class="mb-3">
              <label for="photo" class="form-label">Photo</label>
              <input type="text" class="form-control" id="photo" name="photo">
              @error('photo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            <div class="mb-3">
              <label for="data_uscita" class="form-label">Data uscita</label>
              <input type="text" class="form-control" id="data_uscita" name="data_uscita">
              @error('data_uscita')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            <div class="mb-3">
              <label for="prezzo" class="form-label">Prezzo</label>
              <input type="number" class="form-control" id="prezzo" name="prezzo">
              @error('prezzo')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
    </div>


@endsection