<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['json.response','cors']], function () {

    Route::group(['namespace' => 'Api\Admin'], function () {
        Route::post('admin-login','AuthController@login')->name('admin.login');
    });
});