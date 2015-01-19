<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('curso/{slug}', ['as' => 'detalle_curso', 'uses' => 'CursosController@detalleCurso']);



// Rutas para el logueo del administrador
Route::get('login-admin', ['as' => 'login_admin', 'uses' => 'AuthController@loginAdmin']);
Route::post('login-admin', ['as' => 'login_admin', 'uses' => 'AuthController@ingresoAdmin']);