@extends('layouts.app')

@section('title', 'dettagli')

@section('content')
<main>
    <h1>dettagli</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>
            <p class="card-text">{{ $book->plot }}</p>
        </div>
    </div>
</main>

@endsection