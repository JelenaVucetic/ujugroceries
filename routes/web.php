<?php

use RealRashid\SweetAlert\Facades\Alert;

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
    return view('welcome');
});

Route::get('/usluge', function () {
    return view('services');
});

Route::get('/kakoporuciti', function () {
    return view('howitworks');
});

Route::get('/o-nama', function () {
    return view('about');
});

Route::get('/kontakt', function () {
    return view('contact');
});


Route::post('/send-email', 'SendEmailController@send');

Route::post('/send-order-email', 'SendOrderEmailController@send');

Route::post('/send-groceries-email', 'SendGroceriesEmailController@send');



//Ordrer is important

// Route::get('/products', 'ProductController@index');
// Route::post('/products', 'ProductController@store');
// Route::get('/products/create', 'ProductController@create');
// Route::get('/products/{product}', 'ProductController@show');
// Route::get('/products/{product}/edit', 'ProductController@edit');
// Route::put('/products/{product}', 'ProductController@update');
