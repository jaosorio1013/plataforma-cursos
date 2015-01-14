<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('curso/{slug}', ['as' => 'detalle_curso', 'uses' => 'CursosController@detalleCurso']);


Route::get('login', ['as' => 'login', 'uses' => 'AuthController@index']);



Route::get('mis-cursos', ['as' => 'mis_cursos', 'uses' => 'UsersController@misCursos']);