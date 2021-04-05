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
    return view('welcome');
});

Route::get('/test', function() {
    return view('master');
});

Route::get('/tambah', function () {
    return view('add');
});

Route::post('/add_process', 'MonologController@add_process');
Route::get('/', 'MonologController@show');
Route::get('/detail/{id}', 'MonologController@detail');
Route::get('/admin', 'MonologController@show_by_admin');
Route::get('/edit/{id}', 'MonologController@edit');
Route::post('/edit_process', 'MonologController@edit_process');
Route::get('/delete/{id}', 'MonologController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
