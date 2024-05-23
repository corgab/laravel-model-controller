@extends('layouts.app')

@section('title', 'Films')

@section('movies')

<div class="container">
    <div class="row">
        @foreach ($movies as $movie)
        <div class="card col-5">
            <div class="card-body">
                <h5 class="card-title">Titolo: {{ $movie -> title}}</h5>
                <p class="card-subtitle">{{ $movie -> nationality}}</p>
                <p class="card-text">Data di uscita: {{ $movie -> date}}</p>
                <p class="card-text">Voto: {{ $movie -> vote}}</p>
            </div>

        </div>
        @endforeach
    </div>

</div>


@endsection