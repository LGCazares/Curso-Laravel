<?php

Route::get('/', 'primerController@inicio')->name('/');

Route::post('guarda', 'primerController@guarda')->name('guarda');


