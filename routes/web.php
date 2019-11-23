<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/login')->name('home');

Auth::routes();

Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['prefix' => 'work_test', 'namespace' => 'Test', 'middleware' => ['auth'], 'as' => 'work_test.'], function () {
    Route::get('dashboard', 'DashboardController@index')
        ->name('dashboard.index');
    Route::resource('customers', 'CustomerController');
    Route::resource('categories', 'CategoryController')
        ->except(['show']);
    Route::resource('products', 'ProductController');
    Route::resource('users', 'UserController')->except(['show']);
});
