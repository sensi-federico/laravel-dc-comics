<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\Guest\PageController;
use Illuminate\Support\Facades\Route;
use App\Models\Comic;
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

    $comics = Comic::all();

    return view('welcome', compact('comics'));
})->name('home');


Route::get('admin', function () {

    $comics = Comic::all();

    return view('admin.comics.index', compact('comics'));
})->name('admin');


Route::resource('admin/comics', ComicController::class);
