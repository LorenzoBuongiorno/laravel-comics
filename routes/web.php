<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = config("comics");
    return view('main', compact("data"));
})->name("home");

Route::get('/current/{id}', function ($id) {
    $data = config('comics');
    if(!is_numeric($id) || (int) $id >= count($data)) {
        abort('404');
    }
    $comics = $data[$id];
    return view('dettagli', compact("comics"));
})->name("details");

Route::get('/characters', function () {
    return view('characters');
})->name("characters");

Route::get('/comics', function () {
    return view('comics');
})->name("comics");

Route::get('/movies', function () {
    return view('movies');
})->name("movies");