<?php

Route::group(['prefix'  =>  'admin'], function () {

    Route::get('/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Admin\LoginController@login')->name('admin.login.post');
    Route::get('/logout', 'Admin\LoginController@logout')->name('admin.logout');

    Route::group(['middleware' => ['auth:admin']], function () {
        //-----------------------Route category ---------------------------//
        Route::get('/categories', 'Admin\CategoryController@index')->name('admin.categories.index');
        Route::get('/categories/create', 'Admin\CategoryController@create')->name('admin.categories.create');
        Route::post('/categories', 'Admin\CategoryController@store')->name('admin.category.store');
        Route::get('/categories/{category}/edit', 'Admin\CategoryController@edit')->name('admin.categories.edit');
        Route::patch('/categories/{category}', 'Admin\CategoryController@update')->name('admin.category.update');
        Route::delete('/categories/{category}', 'Admin\CategoryController@destroy')->name('admin.category.destroy');

        Route::get('/', function () {
            return view('admin.dashboard.index');
        })->name('admin.dashboard');

    });

});