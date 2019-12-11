<?php

//home
Route::get('/', 'alumnoController@home')->name('/');

//Documento Word
Route::get('create','DocumentController@create');
Route::post('store','DocumentController@store');

//JavaScrip
Route::get('JavaScrip/01','JavaScripController@index');



//Alumnos
Route::post('formulario_alumno', 'alumnoController@guarda_formulario')->name('guarda_formulario');
Route::get('nuevo_alumno', 'alumnoController@mostrarFormulario')->name('nuevo_alumno');
Route::get('lista_alumnos', 'alumnoController@mostrarAlumnos')->name('lista_alumnos');
Route::get('detalle/alumno/{id}', [ 'as' => 'detalle/alumno', 'uses' => 'alumnoController@detalleAlumno']);
Route::get('editar/alumno/{id}', [ 'as' => 'editar/alumno', 'uses' => 'alumnoController@editAlumno']);
Route::patch('editar/alumno/{id}', [ 'as' => 'editar/alumno', 'uses' => 'alumnoController@updateAlumno']);
Route::get('elimina/alumno/{id}', 'alumnoController@deleteAlumno')->name('elimina/alumno');


//Profesores
Route::post('formulario_profesor', 'profeController@guarda_formulario')->name('guarda_formulario_profe');
Route::get('nuevo_profesor', 'profeController@mostrarFormulario')->name('nuevo_profesor');
Route::get('lista_profesores', 'profeController@mostrarProfesores')->name('lista_profesores');
Route::get('detalle/profesor/{id}', [ 'as' => 'detalle/profesor', 'uses' => 'profeController@detalleProfe']);
Route::get('editar/profesor/{id}', [ 'as' => 'editar/profesor', 'uses' => 'profeController@editProfe']);
Route::patch('editar/profesor/{id}', [ 'as' => 'editar/profesor', 'uses' => 'profeController@updateProfe']);
Route::get('elimina/profesor/{id}', 'profeController@deleteProfe')->name('elimina/profesor');


//materias
Route::post('formulario_materias', 'materiaController@guarda_formulario')->name('guarda_formulario_materia');
Route::get('nueva_materia', 'materiaController@mostrarFormulario')->name('nueva_materia');
Route::get('lista_materias', 'materiaController@mostrarMaterias')->name('lista_materias');
Route::get('detalle/materia/{id}', [ 'as' => 'detalle/materia', 'uses' => 'materiaController@detalleMateria']);
Route::get('editar/materia/{id}', [ 'as' => 'editar/materia', 'uses' => 'materiaController@editMateria']);
















































//Aprendiendo php 
Route::get('index_php', 'phpController@index_php')->name('index_php');
Route::get('estructuras_control', 'phpController@estructuras_control')->name('estructuras_control');
Route::get('switch', 'phpController@switch')->name('switch');
Route::get('arreglos_indexados', 'phpController@arreglos_indexados')->name('arreglos_indexados');
Route::get('print_r_var_dump', 'phpController@print_r_var_dump')->name('print_r_var_dump');










