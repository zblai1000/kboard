<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;

Route::group(['prefix' => 'admin'], function () {

    Route::get('login', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'App\Http\Controllers\Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');

    Route::get('/adminDashboard', function () {
    return view('admin.dashboard.index');
    });

    Route::get('/productDashboard',[ProductController::class, 'index'])->name('productDashboard');
    Route::get('/product',[ProductController::class, 'addProduct']);
    Route::get('/product/{product}',[ProductController::class, 'editProduct']);
    Route::post('/product',[ProductController::class, 'createProduct']);
    Route::post('/product/{product}',[ProductController::class, 'updateProduct']);

});

Route::group(['middleware' => ['auth:admin']], function () {

    Route::get('/adminDashboard', function () {
        return view('admin.dashboard.index');
    })->name('admin.dashboard');

    Route::get('/productDashboard',[ProductController::class, 'index'])->name('productDashboard');
    Route::get('/product',[ProductController::class, 'addProduct']);
    Route::get('/product/{product}',[ProductController::class, 'editProduct']);
    Route::post('/product',[ProductController::class, 'createProduct']);
    Route::post('/product/{product}',[ProductController::class, 'updateProduct']);

});