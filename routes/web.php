<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::middleware(['auth'])->group(function(){
    Route::get('/', 'CategoryController@index');
    Route::resource('category', 'CategoryController');
    Route::resource('product', 'ProductController');
    Route::resource('town', 'TownController');
    //Route::get('category/{id}/travel', 'CategoryController@travel')->name('category.travel');
});

Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
