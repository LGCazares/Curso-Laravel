<?php

Route::get('/', 'primerController@inicio')->name('/');
Route::post('guarda/usuario', 'primerController@guardaUsuario')->name('guarda/usuario');





