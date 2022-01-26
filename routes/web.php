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

Auth::routes();


Route::get('/',          'HomeController@index')->name('home');
Route::get('/about-us',  'HomeController@about')->name('about-us');
Route::get('/contact',   'HomeController@contact')->name('contact');
Route::get('/investors', 'HomeController@investors')->name('investors');
Route::get('/technology','HomeController@technology')->name('technology');
Route::get('/actualities','HomeController@actualities')->name('actualities');

//ADMIN ROUTES
Route::middleware(['auth', 'auth.admin'])->prefix('admin')->group(function () {

    Route::get('/',                'AdminController@admin');
    Route::get('/parts',           'AdminController@parts');
    Route::post('/delete_product', 'AdminController@delete_product');
    Route::post('/add_product',    'AdminController@add_product');
    Route::post('/edit_product',   'AdminController@edit_product');
    Route::post('/delete_photo',   'AdminController@delete_photo');

});
