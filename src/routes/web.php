<?php

Route::group(['namespace' => 'Gatways\Http\Controllers'], function () {
    Route::get('gatways', 'GatwaysController@all');
    Route::get('gatway/{id}', 'GatwaysController@index');
    Route::post('gatways', 'GatwaysController@store');
});
