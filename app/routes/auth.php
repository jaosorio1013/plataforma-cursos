<?php

Route::get('clase/{slug}', ['as' => 'clase', 'uses' => 'ClaseControlle@detalleClase']);
Route::get('datos-reto/{id}', ['as' => 'datos_reto', 'uses' => 'RetosControlle@datosReto']);