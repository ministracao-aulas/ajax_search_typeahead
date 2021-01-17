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

//PostController
Route::get('typeahead',         'PostController@typeahead')->name('post.typeahead');
Route::get('select2',           'PostController@select2')->name('post.select2');

Route::get('autocomplete',      'PostController@autocomplete')->name('post.search.autocomplete');
