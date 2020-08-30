<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/todolist', 'ToDoListController@store');

Route::get('/todolist/create', 'ToDoListController@create');

Route::get('/todolist/{todolist}/show', 'ToDoListController@show');

Route::get('/todolist/{todolist}/edit', 'ToDoListController@edit');

Route::put('/todolist/{todolist}/update', 'ToDoListController@update');

Route::delete('/todolist/{todolist}', 'ToDoListController@destroy');
