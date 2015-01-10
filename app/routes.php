<?php

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('mis-cursos', ['as' => 'mis_cursos', 'uses' => 'UsersController@misCursos']);