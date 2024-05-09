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
    $products = config('products');
    // dd($products);
    return view('layout.main', compact('products'));
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

Route::get('/partials.home', function () {
    //prendo l'array dei prodotti da config
    $products = config('products');

    // dd($products);
    return view('partials.home', compact('products'));
})->name('partials.home');

// Route::get('/partials.product', function () {
//     return view('partials.product');
// })->name('partials.product');
