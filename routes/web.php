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
/* Route::get('/',function(){
    return view('welcome');
<<<<<<< HEAD
}); */
Route::get('/recetas', 'RecetaController@index')->name('recetas.index');
=======
});

>>>>>>> 4d0c514002dd06db64ce912fce3fd7e9373dec1c
Route::get('/recetas/create', 'RecetaController@create')->name('recetas.create');

Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home'); */
