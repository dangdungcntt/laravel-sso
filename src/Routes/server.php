<?php

/**
 * Routes which is neccessary for the SSO server.
 */

Route::middleware(config('laravel-sso.routeGroupMiddleware'))
    ->prefix(trim(config('laravel-sso.routePrefix'), ' /'))
    ->group(function () {
        Route::post('login', 'Nddcoder\LaravelSSO\Controllers\ServerController@login');
        Route::post('logout', 'Nddcoder\LaravelSSO\Controllers\ServerController@logout');
        Route::middleware(config('laravel-sso.routeAttachMiddleware'))
            ->get('attach', 'Nddcoder\LaravelSSO\Controllers\ServerController@attach');
        Route::get('userInfo', 'Nddcoder\LaravelSSO\Controllers\ServerController@userInfo');
    });
