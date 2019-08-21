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

Route::get('/', 'HomepageController@index');
Route::get('/menu/{name?}', 'MenuController@index')->name('menu');
Route::get('/policy', function() {
    return View::make('policy');
})->name('policy');
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('reviews', 'ReviewController@index')->name('review');
    Route::get('reviews/refresh', 'ReviewController@refresh')->name('review.refresh');

});
