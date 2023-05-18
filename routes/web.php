<?php

use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Guest\MovieController as GuestMovieController;
use App\Http\Controllers\Guest\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('homepage');

Route::resource('movies', GuestMovieController::class)
    ->only(['index', 'show']);

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('movies', MovieController::class);


});

require __DIR__.'/auth.php';
