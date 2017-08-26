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
    return view('welcome');
});

Route::get('/clientes',function(){
    return '<h5> <small>Hola Mundo</small></h5>';
});

Route::get('/clientes/{id}',function($id){
    return '<h5> <small>Mi id es: </small></h5>'.$id;
});
