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

use App\User;
use App\Role;
use App\Permission;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/products', 'ProductsController');

Route::resource('/perfil', 'PerfilController')->middleware('auth');

Route::get('/utils/{provincia}', 'UtilsController@get_localidades');

// Route::get('/test', function(){

//     $role = User::find(1);

//     //$role->permissions()->sync([1,2]);
    
//     return $role;

//     // return Permission::create([
//     //     'name' => 's',
//     //     'slug' => 'products.index',
//     //     'description' => 'User can to view List prodcts',
//     // ]);
    

    
// });
