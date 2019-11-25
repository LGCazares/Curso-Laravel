<?php
//home
Route::get('/', 'alumnoController@home')->name('/');
//Alumnos
Route::post('formulario_alumno', 'alumnoController@guarda_formulario')->name('guarda_formulario');
Route::get('nuevo_alumno', 'alumnoController@mostrarFormulario')->name('nuevo_alumno');
Route::get('lista_alumnos', 'alumnoController@mostrarAlumnos')->name('lista_alumnos');
Route::get('alumno/detalle/{id}', [ 'as' => 'alumno/detalle', 'uses' => 'alumnoController@detalleAlumno']);
Route::get('editar/alumno/{id}', [ 'as' => 'editar/alumno', 'uses' => 'alumnoController@editAlumno']);
Route::patch('editar/alumno/{id}', [ 'as' => 'editar/alumno', 'uses' => 'alumnoController@updateAlumno']);
//elimina registro 
Route::get('elimina/alumno/{id}', 'alumnoController@deleteAlumno')->name('elimina/alumno');


//Profesores
Route::post('formulario_profesor', 'profeController@guarda_formulario')->name('guarda_formulario_profe');
Route::get('nuevo_profesor', 'profeController@mostrarFormulario')->name('nuevo_profesor');
Route::get('lista_profesores', 'profeController@mostrarProfesores')->name('lista_profesores');


//materias
Route::post('formulario_materias', 'materiaController@guarda_formulario')->name('guarda_formulario_materia');
Route::get('nueva_materia', 'materiaController@mostrarFormulario')->name('nueva_materia');
Route::get('lista_materias', 'materiaController@mostrarMaterias')->name('lista_materias');
















































//Aprendiendo php 
Route::get('index_php', 'phpController@index_php')->name('index_php');
Route::get('estructuras_control', 'phpController@estructuras_control')->name('estructuras_control');
Route::get('switch', 'phpController@switch')->name('switch');
Route::get('arreglos_indexados', 'phpController@arreglos_indexados')->name('arreglos_indexados');
Route::get('print_r_var_dump', 'phpController@print_r_var_dump')->name('print_r_var_dump');










