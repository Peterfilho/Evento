<?php

Route::get('/', function () {
    return view('dashboard.index');
});
Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

Route::resource('events', 'EventosController');
Route::resource('sponsors', 'PatrocinadoresController');
Route::resource('marketings', 'MarketingController');
Route::resource('events_marketings', 'MarketingController');

Route::get('sponsorships/{id}', 'PatrocinioController@create')->name('sponsorships.create');
Route::get('attractions/{id}', 'AtracaoController@create')->name('attractions.create');

Route::resource('/attractions', 'AtracaoController', ['except' => [
    'create']]);
Route::resource('sponsorships', 'PatrocinioController', ['except' => [
    'create']]);
