<?php

Route::get('/', 'primerController@inicio')->name('/');


Route::get('guarda_formulario', 'primerController@mostrarFormulario')->name('formulario');
Route::post('guarda_formulario', 'primerController@guarda_formulario')->name('guarda_formulario');

Route::get('lista_usuarios', 'primerController@mostrarUsuarios')->name('lista_usuarios');






