<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('posts', 'Api\Pagecontroller@index');

Route::namespace('Api')
    ->prefix('posts')
    ->group(function(){
        Route::get('/', 'Pagecontroller@index');
        Route::get('/{slug}', 'Pagecontroller@show');
    });
