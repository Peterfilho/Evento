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
    return view('Layout.app');
});

Route::get('/newevent', function () {
    return view('evento/event');
});

Route::get('/newpatrocinador', function () {
    return view('patrocinador/cadastrar');
});

Route::resource('patrocinador', 'PatrocinadoresController');
