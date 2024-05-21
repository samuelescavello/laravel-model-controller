@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
    <h1>all movies</h1>
    <ul>
        @foreach ($movies as $movie)
            <li>
               <a href="{{ route('movies.show', $movie->id) }}">{{ $movie->title }}</a> 
            </li>
        @endforeach
    </ul>
</main>

@endsection
