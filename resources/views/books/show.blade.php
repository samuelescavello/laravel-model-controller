@extends('layouts.app')

@section('title', 'dettagli')

@section('content')
<main>
    <h1>dettagli</h1>

    <div class="card">
    <div class="card-body" style="width: 18rem;">
        <img src="{{ $book->cover_image }}" class="card-img-top" alt="...">
            <h5 class="card-title">TITOLO : {{ $book->title }}</h5>
            <p>PLOT : {{ $book->plot }}</p>
        </div>
    </div>
</main>

@endsection