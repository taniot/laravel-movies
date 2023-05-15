@extends('layouts.app')

@section('page.main')
    <div class="container">
        <a href="{{ route('movies.index') }}" alt="Lista Movies">Torna alla lista dei movies</a>
     <h1>Show Movie: {{ $movie->original_title }}</h1>
     {{ $movie->description }}
    <hr>
    Cast: {{ $movie->cast }}
    <hr>
    Genre: {{ $movie->genres }}


    </div>
@endsection
