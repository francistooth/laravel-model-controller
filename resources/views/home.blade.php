{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5">{{ $title }}</h1>

    <div class="container d-flex flex-wrap gap-5">
        @foreach ($movies as $movie)
        <div class="card" style="width: 15rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text"><em>{{ $movie->description }}</em></p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Titolo originale: </b><br>{{ $movie->original_title }}</li>
                <li class="list-group-item"><b>Nazionalità: </b><br>{{ $movie->nationality }}</li>
                <li class="list-group-item"><b>Data: </b><br>{{ $movie->date }}</li>
                <li class="list-group-item"><b>Voto: </b><br>{{ $movie->vote }}</li>
            </ul>
            <a href="{{ route('movieDetails', ['id' => $movie->id]) }}" class="btn btn-success">Dettagli</a>
        </div>
        @endforeach
    </div>
</div>

@endsection


@section('titlePage')
    home
@endsection
