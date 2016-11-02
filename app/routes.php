<?php

Route::get('/', 'RootController@index');
Route::post('/auth/login', 'AuthController@store');
Route::delete('/auth/logout', 'AuthController@destroy');

Route::resource('user', 'UserController', [
    'only' => ['store', ]
]);