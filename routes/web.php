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
// Pantalla principal
Route::get('/', function () {
    return view('home');
});

//  Login usuario
Route::get('/login', function () {
    return view('auth.login');
});

//  Logout usuario
Route::get('/logout', function () {
    return ('Logout usuario');
});

// 	Listado películas
Route::get('/catalog', function () {
    return view('catalog.index');
});

// 	Vista detalle película {id}
Route::get('catalog/show/{id}', function($id)
{
    return view('catalog.show', array('id'=>$id));
})->where('id', '[0-9]+');

// 	Añadir película
Route::get('/catalog/create', function () {
    return view('catalog.create');
});

// 	Modificar película {id}
Route::get('/catalog/edit/{id}', function ($id) {
    return view('catalog.edit', array('id'=>$id));
})->where('id', '[0-9]+');
