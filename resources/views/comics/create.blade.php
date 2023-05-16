@extends('layouts.app')

@section('page-title')
    Aggiungi un nuovo fumetto
@endsection

@section('content')
    <form method="POST" action="{{ route('comics.store') }}">

        @csrf

        <div class="mb-3">
            <label for="thumb" class="form-label">Url dell'immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">date</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
