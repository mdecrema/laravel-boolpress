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

Auth::routes();

// Sezione Admin
Route::prefix('admin')->namespace('Admin')->middleware('auth')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});

// Sezione Pubblica
Route::get('home', 'PostController@index')->name('guests.home');
//Route::resource('posts', 'PostController');


