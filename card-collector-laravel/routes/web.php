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

Route::get('/', function () {
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/collection', 'CollectionController@index');

Route::get('/collection/{card}', 'CollectionController@show');

Route::post('/collection', 'CollectionController@addCard');

// Route::post('/collection', function()
// {
//     var_dump($_POST);

//     return view('collection.index');
// });