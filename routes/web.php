<?php

Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
Route::get('andamento', ['as' => 'andamento', 'uses' => 'DashboardController@andamento']);
Route::get('finalizado', ['as' => 'finalizado', 'uses' => 'DashboardController@finalizado']);
Route::get('/', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);
Route::patch('events/{id}/finalizar',['as'=>'events.finalizar','uses'=>'EventosController@finalizar']);

Route::resource('events', 'EventosController');
Route::resource('sponsors', 'PatrocinadoresController');
Route::resource('marketings', 'MarketingController');
Route::resource('events_marketings', 'MarketingEventoController');

Route::get('sponsorships/{id}', 'PatrocinioController@create')->name('sponsorships.create');
Route::get('attractions/{id}', 'AtracaoController@create')->name('attractions.create');

Route::resource('/attractions', 'AtracaoController', ['except' => [
    'create']]);
Route::resource('sponsorships', 'PatrocinioController', ['except' => [
    'create']]);
