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




Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
