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

Route::get('/group', 'GroupController@index', 'GroupController@index')
    ->middleware(['role:admin']);
Route::post('/group', 'GroupController@store');
Route::get('/group/{group}', 'GroupController@show');
Route::put('/group/{group}', 'GroupController@update');
Route::delete('/group/{group}', 'GroupController@destroy');
Route::post('/group/{group}/user', 'GroupController@addUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
