<?php

Route::get('/', 'RootController@index');
Route::post('/auth/login', 'AuthController@store');
Route::delete('/auth/logout', 'AuthController@destroy');

Route::resource('user', 'UserController', [
    'only' => ['store', ]
]);

Route::group(['prefix'=>'api/v1'], function() {
    Route::resource('places', 'PlaceController', [
     'only' => ['index', 'show']
    ]);

    Route::resource('areas', 'AreaController', [
     'only' => ['index', 'show']
    ]);   
});
