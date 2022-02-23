@extends('layouts.base')

@section('documentTitle')
    {{ $title }}
@endsection

@section('content')

<div class="container">
        <div class="row">
          <form action="{{ route('Comic.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="mb-3">
              <label for="titolo" class="form-label">Titolo</label>
              <input type="text" class="form-control" id="titolo" name="titolo">
            </div>
            <div class="mb-3">
              <label for="editore" class="form-label">Editore</label>
              <input type="text" class="form-control" id="editore" name="editore">
            </div>
            <div class="mb-3">
                <label for="trama" class="form-label">Trama</label>
                <textarea class="form-control" id="trama" name="trama" rows="3"></textarea>
            </div>
            <div class="mb-3">
              <label for="numero" class="form-label">Numero</label>
              <input type="text" class="form-control" id="numero" name="numero">
            </div>
            <div class="mb-3">
              <label for="photo" class="form-label">Photo</label>
              <input type="text" class="form-control" id="photo" name="photo">
            </div>
            <div class="mb-3">
              <label for="data_uscita" class="form-label">Data uscita</label>
              <input type="text" class="form-control" id="data_uscita" name="data_uscita">
            </div>
            <div class="mb-3">
              <label for="prezzo" class="form-label">Prezzo</label>
              <input type="number" class="form-control" id="prezzo" name="prezzo">
            </div>
            
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
    </div>


@endsection