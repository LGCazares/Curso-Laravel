<?php

//Alumnos
Route::post('formulario_alumno', 'alumnoController@guarda_formulario')->name('guarda_formulario');
Route::get('nuevo_alumno', 'alumnoController@mostrarFormulario')->name('nuevo_alumno');
Route::get('lista_alumnos', 'alumnoController@mostrarAlumnos')->name('lista_alumnos');

//Profesores
Route::post('formulario_profesor', 'profeController@guarda_formulario')->name('guarda_formulario_profe');
Route::get('nuevo_profesor', 'profeController@mostrarFormulario')->name('nuevo_profesor');

















































//Aprendiendo php 
Route::get('index_php', 'phpController@index_php')->name('index_php');
Route::get('estructuras_control', 'phpController@estructuras_control')->name('estructuras_control');
Route::get('switch', 'phpController@switch')->name('switch');
Route::get('arreglos_indexados', 'phpController@arreglos_indexados')->name('arreglos_indexados');
Route::get('print_r_var_dump', 'phpController@print_r_var_dump')->name('print_r_var_dump');










