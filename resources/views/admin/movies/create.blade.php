@extends('layouts.app')

@section('page.main')
    <div class="container">

        <div class="page-header d-flex justify-content-between align-items-center mb-5">
            <h1>Create Movie</h1>
            <a href="{{ route('admin.movies.index') }}" class="btn btn-sm btn-primary" alt="Lista Movies">Torna alla lista dei
                movies</a>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="original_title" class="form-label">Original Title</label>
                <input type="text" class="form-control" id="original_title" name="original_title"
                    value="{{ old('original_title') }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="year" class="form-label">Year</label>
                <input type="text" class="form-control" id="year" name="year" value="{{ old('year') }}">
            </div>
            <div class="mb-3">
                <label for="country" class="form-label">Country</label>
                <input type="text" class="form-control" id="country" name="country" value="{{ old('country') }}">
            </div>
            <div class="mb-3">
                <label for="cast" class="form-label">Cast</label>
                <input type="text" class="form-control" id="cast" name="cast" value="{{ old('cast') }}">
            </div>
            <div class="mb-3">
                <label for="production" class="form-label">Production</label>
                <input type="text" class="form-control" id="production" name="production"
                    value="{{ old('production') }}">
            </div>
            <div class="mb-3">
                <label for="director" class="form-label">Director</label>
                <input type="text" class="form-control" id="director" name="director" value="{{ old('director') }}">
            </div>
            <div class="mb-3">
                <label for="genres" class="form-label">Genre</label>
                <input type="text" class="form-control" id="genres" name="genres" value="{{ old('genres') }}">
            </div>
            <div class="mb-3">
                <label for="cover_image" class="form-label">Image</label>
                <input class="form-control" type="file" id="cover_image" name="cover_image">
            </div>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
