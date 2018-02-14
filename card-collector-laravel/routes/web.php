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

// Card collection route
Route::get('/collection', function () {
    $cards = App\Card::all();

    return view('collection.index', compact('cards'));
});

Route::get('/collection/{card}', function ($id) {
    
    $card = DB::table('cards')->find($id);

    return view('collection.show', compact('card'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
