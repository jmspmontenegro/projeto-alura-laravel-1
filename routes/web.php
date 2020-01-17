<?php
Route::get('/', function () {
    return view('welcome');
});

#Rotas para séries
Route::get('/series', 'SeriesController@index')->name('serie_lista');
Route::get('/series/criar', 'SeriesController@create')->name('serie_form_criar');
Route::post('/series/criar', 'SeriesController@store')->name('serie_form_gravar');
Route::delete('/series/{id}', 'SeriesController@destroy')->name('serie_form_remover');