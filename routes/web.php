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
Route::get('/mustang', 'MustangController@create')->name('stangs.create');
Route::post('/mustang', 'MustangController@show')->name('stangs.show');
Route::get('/mymustang', 'MyMustangController@create')->name('stangs.create');
Route::post('/mymustang', 'MyMustangController@store')->name('stangs.store');

# Show form to edit a book
Route::get('/edit', 'MyMustangController@show')->name('stangs.show');
Route::post('/edit', 'MyMustangController@edit')->name('stangs.edit');


# Process form to edit a book
Route::put('/edit', 'MyMustangController@update')->name('stangs.update');
# Get route to confirm deletion of book
Route::get('/delete', 'MyMustangController@delete')->name('stangs.destroy');
# Delete route to actually destroy the book
Route::delete('/delete', 'MyMustangController@destroy')->name('stangs.destroy');
/*
Route::get('/users', 'MustangController@create')->name('users.create');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/password', 'PasswordController@create')->name('password.create');
Route::post('/password', 'PasswordController@store')->name('password.store');
*/
