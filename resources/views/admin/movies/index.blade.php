@extends('layouts.app')

@section('page.main')
    <div class="container">
        <div class="page-header d-flex justify-content-between align-items-center mb-5">
            <h1>Lista Movies</h1>
            <a href="{{ route('admin.movies.create') }}" class="btn btn-primary btn-sm">Create new Movie</a>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Year</th>
                    <th scope="col">Country</th>
                    <th scope="col">Score</th>
                    <th scope="col">Duration</th>
                    <th scope="col"></th>
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
                                <ul class="list-unstyled d-flex gap-2 m-0 p-0 justify-content-end">
                                    <li><a href="{{ route('admin.movies.show', $movie->id) }}"
                                            class="btn btn-primary btn-sm"><i class="fa-regular fa-eye"></i></a></li>
                                    <li><a href="{{ route('admin.movies.edit', $movie->id) }}"
                                            class="btn btn-warning btn-sm"><i class="fa-regular fa-pen-to-square"></i></a></li>
                                    <li>
                                        <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"><i class="fa-regular fa-trash-can"></i></button>
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
