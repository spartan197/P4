<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'MustangController@index')->name('stangs.index');
Route::get('/mustang', 'MustangController@create')->name('stangs.create')->middleware('auth');
Route::post('/mustang', 'MustangController@show')->name('stangs.show')->middleware('auth');
Route::get('/mymustang', 'MyMustangController@create')->name('stangs.create')->middleware('auth');
Route::post('/mymustang', 'MyMustangController@store')->name('stangs.store')->middleware('auth');

// Show form to edit a Mustang
Route::get('/edit', 'MyMustangController@show')->name('stangs.show')->middleware('auth');
Route::post('/edit', 'MyMustangController@edit')->name('stangs.edit')->middleware('auth');

# Process form to edit a Mustang
Route::put('/edit', 'MyMustangController@update')->name('stangs.update')->middleware('auth');
# Get route to confirm deletion of Mustang
Route::get('/delete', 'MyMustangController@delete')->name('stangs.delete')->middleware('auth');
# Delete route to actually destroy the Mustang
Route::delete('/delete', 'MyMustangController@destroy')->name('stangs.destroy')->middleware('auth');

Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');
