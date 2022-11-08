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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function () {

    /* FORMULÁRIO DE LOGIN */
    Route::get('/', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.do');

    /* ROTAS PROTEGIDAS */
    Route::group(['middleware' => ['auth']], function () {

        /* ROTAS DASHBOARD */
        Route::get('home', 'AuthController@home')->name('home');

        /* user */
        Route::get('users', 'UserController@index')->name('users.index');
        Route::get('users/create', 'UserController@create')->name('users.create');
        Route::post('users/store', 'UserController@store')->name('users.store');
        Route::get('users/edit/{id}', 'UserController@edit')->name('users.edit');
        Route::put('users/update/{id}', 'UserController@update')->name('users.update');
        Route::delete('users/destroy/{id}', 'UserController@destroy')->name('users.destroy');
        Route::post('users/search-user', 'UserController@search_user')->name('users.search_user');

        /* teacher */
        Route::get('teachers', 'TeacherController@index')->name('teachers.index');
        Route::get('teachers/create', 'TeacherController@create')->name('teachers.create');

    });

    /* LOGOUT */
    Route::get('logout', 'AuthController@logout')->name('logout');
});
