<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('curso/{slug}', ['as' => 'detalle_curso', 'uses' => 'CursosController@detalleCurso']);


Route::get('mis-cursos', ['as' => 'mis_cursos', 'uses' => 'UsersController@misCursos']);




Route::get('login-admin', ['as' => 'login_admin', 'uses' => 'AuthController@loginAdmin']);
Route::post('login-admin', ['as' => 'login_admin', 'uses' => 'AuthController@ingresoAdmin']);
Route::post('login', ['as' => 'login', 'uses' => 'AuthController@ingreso']);




Route::group(['before' => 'auth'], function(){
    require(__DIR__.'/routes/auth.php');

    Route::group(['before' => 'is_admin'], function () {
        require (__DIR__.'/routes/admin.php');
    });
});