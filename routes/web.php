<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// Route::get('/', function () {
//     return view('welcome');
// });


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/products', 'ProductsController');

Route::resource('/perfil', 'PerfilController')->middleware('auth');

Route::get('/utils/{provincia}', 'UtilsController@get_localidades');


    