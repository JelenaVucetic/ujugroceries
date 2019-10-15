<?php

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
    return view('welcome' , [
        'products' => App\Product::latest()->get()
    ]);
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/products/{product}', 'ProductController@show');