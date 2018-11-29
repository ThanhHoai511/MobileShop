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



Route::get('/editPass', 'Auth\ChangePasswordController@edit')->name('editPass');
Route::put('/updatePass', 'Auth\ChangePasswordController@update')->name('updatePass');

Route::group(['prefix' => ''], function() {
    Route::get('/', 'Client\HomeController@index')->name('index');
    Route::get('addLike/{id}', 'Client\HomeController@addLike')->name('addLike');
    Route::get('detailProduct/{id}', 'Client\HomeController@detailProduct')->name('detailProduct');
    Route::get('mobile/{id}', 'Client\HomeController@mobileByCategory')->name('mobileByCategory');
});
Route::group(['prefix' => 'cart'], function() {
    Route::get('', 'Client\CartController@cart')->name('cart');
    Route::get('addCart/{id}', 'Client\CartController@add')->name('addToCart');
    Route::get('deleteItem/{id}', 'Client\CartController@removeItem')->name('deleteItem');
    Route::get('deleteAll', 'Client\CartController@delete')->name('deleteAll');
    Route::get('checkout', 'Client\CartController@checkout')->name('checkout');
    Route::post('order', 'Client\CartController@order')->name('order');
});
 
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('/', 'Admin\AdminCategoryController@admin')->name('admin.index');
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
        Route::get('edit/{id}', 'Admin\AdminProductController@edit')->name('editProduct');
        Route::post('edit/{id}', 'Admin\AdminProductController@update');
        Route::get('delete/{id}', 'Admin\AdminProductController@destroy')->name('deleteProduct');
    });

    Route::group(['prefix' => 'group'], function() {
        Route::get('/', 'Admin\AdminGroupController@index')->name('listGroup');
        Route::get('add', 'Admin\AdminGroupController@create')->name('addGroup');
        Route::post('add', 'Admin\AdminGroupController@store');
        Route::get('edit/{id}', 'Admin\AdminGroupController@edit')->name('editGroup');
        Route::post('edit/{id}', 'Admin\AdminGroupController@update');
        Route::get('delete/{id}', 'Admin\AdminGroupController@destroy')->name('deleteGroup');
    });

    Route::group(['prefix' => 'product-group'], function() {
        Route::get('/', 'Admin\AdminProductGroupController@index')->name('listProductGroup');
        Route::get('add', 'Admin\AdminProductGroupController@create')->name('addProductGroup');
        Route::post('add', 'Admin\AdminProductGroupController@store');
        Route::get('edit/{id}', 'Admin\AdminProductGroupController@edit')->name('editProductGroup');
        Route::post('edit/{id}', 'Admin\AdminProductGroupController@update');
        Route::get('delete/{id}', 'Admin\AdminProductGroupController@destroy')->name('deleteProductGroup');
    });

    Route::group(['prefix' => 'bill-import'], function() {
        Route::get('/', 'Admin\AdminBillImportController@index')->name('listBillImport');
        Route::get('add', 'Admin\AdminBillImportController@create')->name('addBillImport');
        Route::post('add', 'Admin\AdminBillImportController@store');
        Route::get('edit/{id}', 'Admin\AdminBillImportController@edit')->name('editBillImport');
        Route::post('edit/{id}', 'Admin\AdminBillImportController@update');
        Route::get('delete/{id}', 'Admin\AdminBillImportController@destroy')->name('deleteBillImport');
    });

    Route::group(['prefix' => 'detail-product'], function() {
        Route::get('/', 'Admin\AdminDetailProductController@index')->name('listDetailProduct');
        Route::get('edit/{id}', 'Admin\AdminDetailProductController@edit')->name('editDetailProduct');
        Route::post('edit/{id}', 'Admin\AdminDetailProductController@update');
        Route::get('delete/{id}', 'Admin\AdminDetailProductController@destroy')->name('deleteDetailProduct');
    });

    Route::group(['prefix' => 'detail-bill-import'], function() {
        Route::get('/', 'Admin\AdminDetailBillImportController@index')->name('listDetailBillImport');
        Route::get('add', 'Admin\AdminDetailBillImportController@create')->name('addDetailBillImport');
        Route::post('add', 'Admin\AdminDetailBillImportController@store');
        Route::get('edit/{id}', 'Admin\AdminDetailBillImportController@edit')->name('editDetailBillImport');
        Route::post('edit/{id}', 'Admin\AdminDetailBillImportController@update');
        Route::get('delete/{id}', 'Admin\AdminDetailBillImportController@destroy')->name('deleteDetailBillImport');
    });
}); 


Auth::routes();

Route::group(['prefix' => '', 'middleware' => ['role']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});
