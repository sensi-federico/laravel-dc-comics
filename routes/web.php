<?php

use App\Http\Controllers\ComicController;
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

Route::resource('admin/comics', ComicController::class);
