<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/products', 'ProductsController');

Route::get('/utils/{provincia}', 'UtilsController@get_localidades');

Route::get('/image', function(){

    $img = Image::make(public_path().'/images/auto1.jpg');
    $img->resize(100,100);
    $img->save(storage_path().'/app/public/images/auto.jpg');

    return "helo";
} ); 
