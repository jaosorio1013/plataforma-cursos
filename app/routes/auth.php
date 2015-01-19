<?php

Route::get('logout', ['as' => 'logout', 'uses' => 'AuthController@logout']);


Route::get('mis-cursos', ['as' => 'mis_cursos', 'uses' => 'UsersController@misCursos']);
Route::get('clase/{slug}', ['as' => 'clase', 'uses' => 'ClaseControlle@detalleClase']);
Route::get('datos-reto/{id}', ['as' => 'datos_reto', 'uses' => 'RetosControlle@datosReto']);