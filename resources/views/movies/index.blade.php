@extends('layouts.app')

@section('page.main')
    <div class="container">
      <h1>Lista Movies</h1>
        <a href="{{ route('movies.create') }}" class="btn btn-primary">Create new Movie</a>
       <table class="table">
        <thead>
          <tr>
            <th scope="col">Title</th>
            <th scope="col">Year</th>
            <th scope="col">Country</th>
            <th scope="col">Score</th>
            <th scope="col">Duration</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
          <tr>
            <td>{{ $movie->original_title }}</td>
            <td>{{ $movie->year }}</td>
            <td>{{ $movie->country }}</td>
            <td>{{ $movie->score }}</td>
            <td>{{ $movie->duration }}</td>
            <td>
                <nav>
                    <ul class="list-unstyled d-flex gap-2">
                        <li><a href="{{ route('movies.show', $movie->id) }}" class="btn btn-primary">Show</a></li>
                        <li><a href="{{ route('movies.edit', $movie->id) }}" class="btn btn-secondary">Edit</a></li>
                        <li>
                            <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </li>
                    </ul>
                </nav>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>

    </div>
@endsection
