<?php

Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

Route::get('/newpatrocinador', function () {
    return view('patrocinador/cadastrar');
});

Route::get('/newmarketing', function () {
    return view('Marketing/cadastrar');
});

//Route::resource('patrocinador', 'PatrocinadoresController');

// para usar com guzzle - teste

Route::resource('events', 'EventosController');
Route::resource('sponsor', 'PatrocinadoresController');
Route::resource('marketings', 'MarketingController');
Route::resource('/attractions', 'AtracaoController');

