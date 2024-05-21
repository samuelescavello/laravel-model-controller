@extends('layouts.app')

@section('title', 'dettagli')

@section('content')
<main>
    <h1>dettagli</h1>

    <div class="card">
        <div class="card-body" style="width: 18rem;">
        <img src="{{ $movie->image }}" class="card-img-top" alt="...">
            <h5 class="card-title">{{ $movie->title }}</h5>
            <p class="card-text">DATA USCITA : {{ $movie->date }}</p>
            <p>LINGUA : {{ $movie->language }}</p>
            <p>TITOLO ORIGINALE : {{ $movie->original_title }}</p>
        </div>
    </div>
</main>

@endsection