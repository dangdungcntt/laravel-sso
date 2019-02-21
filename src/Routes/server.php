<?php

/**
 * Routes which is neccessary for the SSO server.
 */

Route::middleware(config('laravel-sso.routeMiddleware'))->prefix(trim(config('laravel-sso.routePrefix'), ' /'))->group(function () {
    Route::post('login', 'Nddcoder\LaravelSSO\Controllers\ServerController@login');
    Route::post('logout', 'Nddcoder\LaravelSSO\Controllers\ServerController@logout');
    Route::get('attach', 'Nddcoder\LaravelSSO\Controllers\ServerController@attach');
    Route::get('userInfo', 'Nddcoder\LaravelSSO\Controllers\ServerController@userInfo');
});
