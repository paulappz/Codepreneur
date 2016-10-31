<?php

Route::get('/', 'RootController@index');
Route::post('/auth', 'AuthController@post');