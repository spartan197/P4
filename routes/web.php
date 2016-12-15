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

# Show form to edit a book
Route::get('/edit', 'MyMustangController@show')->name('stangs.show')->middleware('auth');
Route::post('/edit', 'MyMustangController@edit')->name('stangs.edit')->middleware('auth');


# Process form to edit a book
Route::put('/edit', 'MyMustangController@update')->name('stangs.update')->middleware('auth');
# Get route to confirm deletion of book
Route::get('/delete', 'MyMustangController@delete')->name('stangs.delete')->middleware('auth');
# Delete route to actually destroy the book
Route::delete('/delete', 'MyMustangController@destroy')->name('stangs.destroy')->middleware('auth');
/*
Route::get('/users', 'UserController@create')->name('users.create');
Route::post('/users', 'UserController@store')->name('users.store');
Route::get('/password', 'PasswordController@create')->name('password.create');
Route::post('/password', 'PasswordController@store')->name('password.store');
*/
if(App::environment('local')) {
    Route::get('/drop', function() {
        DB::statement('DROP database P4');
        DB::statement('CREATE database P4');
        return 'Dropped P4; created P4.';
    });
};

Auth::routes();
Route::get('/logout','Auth\LoginController@logout')->name('logout');

//Route::get('/home', 'HomeController@index');
