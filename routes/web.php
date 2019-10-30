<?php

Route::get('/', 'primerController@inicio')->name('/');

Route::get('guarda', 'primerController@muestra_vista')->name('guarda');
Route::post('guarda', 'primerController@guarda')->name('guarda');


