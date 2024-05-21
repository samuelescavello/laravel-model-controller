@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container">
    <h1>all movies</h1>
    <div class="row">
        @foreach ($movies as $movie)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</main>

@endsection
