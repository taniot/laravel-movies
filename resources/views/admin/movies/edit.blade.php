@extends('layouts.app')

@section('page.main')
    <div class="container">
        <h1>Edit Movie: {{ $movie->original_title }}</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="original_title" class="form-label">Original Title</label>
              <input type="text" class="form-control" id="original_title" name="original_title" value="{{ old('original_title', $movie->original_title) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $movie->description) }}</textarea>
              </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ old('year', $movie->year) }}">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" value="{{ old('country', $movie->country) }}">
            </div>
            <div class="mb-3">
                <label for="cast" class="form-label">Cast</label>
                <input type="text" class="form-control" id="cast" name="cast" value="{{ old('cast', $movie->cast) }}">
            </div>
            <div class="mb-3">
                <label for="production" class="form-label">Production</label>
                <input type="text" class="form-control" id="production" name="production" value="{{ old('production', $movie->production) }}">
            </div>
            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" name="director" value="{{ old('director', $movie->director) }}">
            </div>
            <div class="mb-3">
                <label for="genres" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genres" name="genres" value="{{ old('genres', $movie->genres) }}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection
