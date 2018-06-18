<?php

Route::get('/', function () {
    return view('Layout.app');
});

Route::get('/newevent', function () {
    return view('evento/event');
});

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
