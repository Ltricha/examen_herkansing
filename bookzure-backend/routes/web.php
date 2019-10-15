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


use Illuminate\Support\Facades\Route;



Route::get('/', 'HomeController@index');

Route::get('boeken/{genre}', 'ShopController@index');

Route::get('boek/{id}/{title}' , 'BookController@index');


Route::get('over-ons', function () {
    return view('about');
});


Route::get('nieuws', function () {
    return view('news');
});

Route::get('vacatures', function () {
    return view('vacatures');
});



Route::get('klantenservice', function () {
    return view('client-service');
});

