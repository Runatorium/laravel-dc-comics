@extends('layouts.app')

@section('page-title', 'lista fumetti')

@section('content')
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-3 h-100">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h4 class="card-text">{{ $comic->title }}</h4>
                        <p>{{ $comic->descripion }}</p>
                        <p>${{ $comic->price }}</p>
                        <p>{{ $comic->series }}</p>
                    </div>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}"class="btn btn-secondary">info fumetto</a>
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-secondary mt-2">Edita
                        Elemento</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
