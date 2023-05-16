@extends('layouts.app')

@section('page-title', 'lista fumetti')

@section('content')
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-text">{{ $comic->title }}</h2>
                        <p>{{ $comic->descripion }}</p>
                        <p>${{ $comic->price }}</p>
                        <p>{{ $comic->series }}</p>
                    </div>
                    <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">info fumetto</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
