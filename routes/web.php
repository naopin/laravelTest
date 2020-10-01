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

// 大阪学園コード5
// Route::get('/', 'HelloController@index');

// 大阪学園コード6
Route::get('one', 'HelloController@one');
Route::get('two', 'HelloController@two');
Route::get('three', 'HelloController@three');


