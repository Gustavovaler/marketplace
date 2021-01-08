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

/// MERCADOPAGO

Route::get('/vendedores/autorizar', 'MercadoPagoController@seller_auth_form')->middleware('auth');
Route::get('/vendedores/codigo_autorizacion', 'MercadoPagoController@get_link_up_code')->middleware('auth');
Route::post('/vendedores/codigo_autorizacion', 'MercadoPagoController@get_seller_credentials')->middleware('auth');