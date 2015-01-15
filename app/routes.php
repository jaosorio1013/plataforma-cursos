<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('curso/{slug}', ['as' => 'detalle_curso', 'uses' => 'CursosController@detalleCurso']);


Route::get('mis-cursos', ['as' => 'mis_cursos', 'uses' => 'UsersController@misCursos']);



Route::get('login', ['as' => 'login', 'uses' => 'AuthController@login']);

Route::group(['before' => 'auth'], function(){
    require(__DIR__.'/routes/auth.php');

    Route::group(['before' => 'is_admin'], function () {
        require (__DIR__.'/routes/admin.php');
    });
});