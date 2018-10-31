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

Route::get('/', function () {
    return view('client.layouts.home');
});

Route::group(['prefix' => 'admin'], function() {
    Route::group(['prefix' => 'category'], function() {
        Route::get('/', 'Admin\AdminCategoryController@index')->name('listCategory');
        Route::get('add', 'Admin\AdminCategoryController@create')->name('addCategory');
        Route::post('add', 'Admin\AdminCategoryController@store');
        Route::get('edit/{id}', 'Admin\AdminCategoryController@edit')->name('editCategory');
        Route::post('edit/{id}', 'Admin\AdminCategoryController@update');
        Route::get('delete/{id}', 'Admin\AdminCategoryController@destroy')->name('deleteCategory');
    });

    Route::group(['prefix' => 'product'], function() {
        Route::get('/', 'Admin\AdminProductController@index')->name('listProduct');
        Route::get('add', 'Admin\AdminProductController@create')->name('addProduct');
        Route::post('add', 'Admin\AdminProductController@store');
        Route::get('edit/{id}', 'Admin\AdminProductController@edit');
        Route::post('edit/{id}', 'Admin\AdminProductController@update');
        Route::get('delete/{id}', 'Admin\AdminProductController@destroy');
    });
}); 

