<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$movies = Movie::all();
        $movies = Movie::where('is_deleted', 0)
                    ->orderBy('score', 'DESC')
                    ->get();

        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMovieRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMovieRequest $request)
    {


        $data = $request->validated();

        $newMovie = new Movie();
        //inserimento dati in tabella

        if(isset($data['cover_image'])){
            //carichiamo immagine :)
            // - spostare immagine da folder temporanea a folder "disco"
            $path_img = Storage::put('uploads/moviestest', $data['cover_image']);
            // -- nuova path dell'immagine
            // dd($path_img);
            // salvare nuova path immagine in tabella -> campo corrispondente
            $newMovie->cover_image = $path_img;
        }



        $newMovie->fill($data);



        //
        $newMovie->save();
        //non arrivo neanche qui
        return to_route('admin.movies.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {

        //find

        return view('admin.movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMovieRequest  $request
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMovieRequest $request, Movie $movie)
    {
        $data = $request->validated();
        $movie->update($data);
        return to_route('admin.movies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return to_route('admin.movies.index');
    }
}
