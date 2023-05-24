@extends('layouts.app')

@section('page.main')
    <div class="container">

        <div class="page-header d-flex justify-content-between align-items-center mb-5">
            <h1>Show Movie: {{ $movie->original_title }}</h1>
            <a href="{{ route('admin.movies.index') }}" class="btn btn-sm btn-primary" alt="Lista Movies">Torna alla lista dei movies</a>
        </div>





     {{ $movie->description }}
    <hr>
    Cast: {{ $movie->cast }}
    <hr>
    Genre: {{ $movie->genres }}


    </div>
@endsection
