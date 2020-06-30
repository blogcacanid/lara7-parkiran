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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('konsumen', 'KonsumenController');
// display konsume list
Route::get('konsumen-list', ['uses'=>'KonsumenController@index', 'as'=>'konsumen.list']);
Route::get('konsumen-add', ['uses'=>'KonsumenController@create', 'as'=>'konsumen.add']);
Route::post('konsumen-post', ['uses'=>'KonsumenController@store', 'as'=>'konsumen.post']);
Route::get('konsumen-edit/{id?}', ['uses'=>'KonsumenController@edit', 'as'=>'konsumen.edit']);

// delete a product
Route::get('konsumen-delete/{id?}', ['uses'=>'KonsumenController@delete', 'as'=>'konsumen.delete']);
Route::get('konsumen-destroy/{id?}', ['uses'=>'KonsumenController@destroy', 'as'=>'konsumen.destroy']);
