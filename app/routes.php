<?php

require(__DIR__.'/routes/accesoComun.php');


Route::group(['before' => 'gest'], function(){
    Route::post('login', ['as' => 'login', 'uses' => 'AuthController@ingreso']);
    Route::get('login-admin', ['as' => 'login_admin', 'uses' => 'AuthController@loginAdmin']);
    Route::post('login-admin', ['as' => 'login_admin', 'uses' => 'AuthController@ingresoAdmin']);
});


Route::group(['before' => 'auth'], function(){
    require(__DIR__.'/routes/auth.php');
});


Route::group(['before' => 'is_admin'], function () {
    require (__DIR__.'/routes/admin.php');
});