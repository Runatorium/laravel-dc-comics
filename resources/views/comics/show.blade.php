@section('page-title')
    {{ $comic->title }}
@endsection

<div class="col-3">
    <div class="card" style="width: 18rem;">
        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h2 class="card-text">{{ $comic->title }}</h2>
            <p>{{ $comic->descripion }}</p>
            <p>${{ $comic->price }}</p>
            <p>{{ $comic->series }}</p>
        </div>
    </div>

    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna alla lista</a>

</div>
