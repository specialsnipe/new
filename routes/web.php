<?php

use Illuminate\Support\Facades\Route;

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



Auth::routes();
Route::group(['namespace' => 'App\Http\Controllers\Main', ], function (){
    Route::get('/','IndexController')->name('main.index');
});
Route::group(['namespace' => 'App\Http\Controllers\Products', ], function (){
    Route::get('/product','IndexController')->name('product.index');
});



Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });
    Route::group(['namespace' => 'Crops', 'prefix' => 'crop'], function () {
        Route::get('/', 'IndexController')->name('admin.crop.index');
        Route::get('/create', 'CreateController')->name('admin.crop.create');
        Route::post('/', 'StoreController')->name('admin.crop.store');
        Route::get('/{crop}', 'ShowController')->name('admin.crop.show');
        Route::get('/{crop}/edit', 'EditController')->name('admin.crop.edit');
        Route::patch('/{crop}', 'UpdateController')->name('admin.crop.update');
        Route::delete('/{crop}', 'DeleteController')->name('admin.crop.delete');
    });
    Route::group(['namespace' => 'Clients', 'prefix' => 'client'], function () {
        Route::get('/', 'IndexController')->name('admin.client.index');
        Route::get('/create', 'CreateController')->name('admin.client.create');
        Route::post('/', 'StoreController')->name('admin.client.store');
        Route::get('/{client}', 'ShowController')->name('admin.client.show');
        Route::get('/{client}/edit', 'EditController')->name('admin.client.edit');
        Route::patch('/{client}', 'UpdateController')->name('admin.client.update');
        Route::delete('/{client}', 'DeleteController')->name('admin.client.delete');

    });
    Route::group(['namespace' => 'Fertilizers', 'prefix' => 'fertilizer'], function () {
        Route::get('/', 'IndexController')->name('admin.fertilizer.index');
        Route::get('/create', 'CreateController')->name('admin.fertilizer.create');
        Route::post('/', 'StoreController')->name('admin.fertilizer.store');
        Route::get('/{fertilizer}', 'ShowController')->name('admin.fertilizer.show');
        Route::get('/{fertilizer}/edit', 'EditController')->name('admin.fertilizer.edit');
        Route::patch('/{fertilizer}', 'UpdateController')->name('admin.fertilizer.update');
        Route::delete('/{fertilizer}', 'DeleteController')->name('admin.fertilizer.delete');
    });
    Route::group(['namespace' => 'Users', 'prefix' => 'user'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });
    Route::group(['namespace' => 'Deleted', 'prefix' => 'deleted'], function () {
        Route::group(['namespace' => 'Clients', 'prefix' => 'client'], function () {
            Route::get('/', 'IndexController')->name('admin.deleted.client.index');
            Route::get('/{client}', 'UpdateController')->name('admin.deleted.client.update');
            Route::delete('/{client}', 'DeleteController')->name('admin.deleted.client.delete');

        });
        Route::group(['namespace' => 'Users', 'prefix' => 'user'], function () {
            Route::get('/', 'IndexController')->name('admin.deleted.user.index');
            Route::get('/{user}', 'UpdateController')->name('admin.deleted.user.update');
            Route::delete('/{user}', 'DeleteController')->name('admin.deleted.user.delete');

        });
        Route::group(['namespace' => 'Crops', 'prefix' => 'crop'], function () {
            Route::get('/', 'IndexController')->name('admin.deleted.crop.index');
            Route::get('/{crop}', 'UpdateController')->name('admin.deleted.crop.update');
            Route::delete('/{crop}', 'DeleteController')->name('admin.deleted.crop.delete');

        });
        Route::group(['namespace' => 'Fertilizers', 'prefix' => 'fertilizer'], function () {
            Route::get('/', 'IndexController')->name('admin.deleted.fertilizer.index');
            Route::get('/{fertilizer}', 'UpdateController')->name('admin.deleted.fertilizer.update');
            Route::delete('/{fertilizer}', 'DeleteController')->name('admin.deleted.fertilizer.delete');

        });
    });
});


