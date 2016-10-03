<?php

Route::group(['prefix' => 'pingpongthemes', 'namespace' => 'Modules\PingpongThemes\Http\Controllers'], function () {
    Route::get('/', 'PingpongThemesController@index');
});
