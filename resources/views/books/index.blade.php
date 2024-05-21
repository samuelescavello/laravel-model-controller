@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main class="container">
    <h1>all books</h1>
    <div class="row">
        @foreach ($books as $book)
            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $book->cover_image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>

@endsection


<!-- <ul>
        @foreach ($books as $book)
            <li>
               <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a> 
            </li>
        @endforeach
    </ul> -->