<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('curso/{slug}', ['as' => 'detalle_curso', 'uses' => 'CursosController@detalleCurso']);


Route::get('login', ['as' => 'login', 'uses' => 'AuthController@index']);
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@loginUsuario']);



Route::get('mis-cursos', ['as' => 'mis_cursos', 'uses' => 'UsersController@misCursos']);


//Route::group(['before' => 'auth'], function(){
    require(__DIR__.'/routes/auth.php');
//});