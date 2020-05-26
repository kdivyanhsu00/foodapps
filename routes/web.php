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
    return view('create');

});
Route::resource('foodaap','FoodaapController');

Route::resource('fsubmit','FoodaapController@create');
#Route::resource('fsubmit','FoodaapController@newfood');

#Route::resource('', 'FoodaapController@show')->name('foodaaps.show');
Route::get('/foodaaps/show/{foodaap}','FoodaapController@show')->name('foodaaps.show');
Route::post('/foodaaps/delete/{foodaap}','FoodaapController@delete')->name('foodaaps.delete');
#Route::post('/foodaaps/delete1/{foodaap}','FoodaapController@delete1')->name('foodaaps.delete1');


Route::get('catview','FoodaapController@catfunct');
Route::post('get_category','FoodaapController@get_category')->name('get_category');

Route::resource('recipie', 'RecipieController');
Route::post('get_recipie','RecipieController@get_recipie')->name('get_recipie');
Route::get('recipie/getdata','RecipieController@getdata')->name('recipie.getdata');



