<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


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
    return view('welcome');
});

Route::get('/users','App\Http\Controllers\API\UserController@index')->name('index');
Route::get('/users/create','App\Http\Controllers\API\UserController@store')->name('store');
Route::get('/users/{user}','App\Http\Controllers\API\UserController@show')->name('edit');
Route::get('/users/show/{user}','App\Http\Controllers\API\UserController@update')->name('update');
Route::get('/users/delete/{id}','App\Http\Controllers\API\UserController@delete')->name('delete');

Route::get('/inventory','App\Http\Controllers\API\UserController@index')->name('inventory-index');
Route::get('/inventory/create','App\Http\Controllers\API\UserController@store')->name('inventory-store');
Route::get('/inventory/{inventories}','App\Http\Controllers\API\UserController@show')->name('inventory-edit');
Route::get('/inventory/show/{inventories}','App\Http\Controllers\API\UserController@update')->name('inventory-update');
Route::get('/inventory/delete/{id}','App\Http\Controllers\API\UserController@delete')->name('inventory-delete');



