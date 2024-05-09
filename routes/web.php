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
    return view('layout.main');
})->name('layout.main');

Route::get('/partials.donna', function () {
    return view('partials.donna');
})->name('partials.donna');

Route::get('/partials.uomo', function () {
    return view('partials.uomo');
})->name('partials.uomo');

Route::get('/partials.bambino', function () {
    return view('partials.bambino');
})->name('partials.bambino');
