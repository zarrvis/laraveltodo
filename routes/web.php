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

Route::get('/todo', [
  'uses' => 'TodosController@index',
  'as' => 'todos'
]);

Route::post('/todo/create', [
  'uses' => 'TodosController@store',
  'as' => 'todo.create'
]);

Route::get('/todo/delete/{id}',[
  'uses' => 'TodosController@delete',
  'as' => 'todo.delete'
]);

Route::get('/todo/update/{id}',[
  'uses' => 'TodosController@update',
  'as' => 'todo.update'
]);

Route::get('/todo/view/{id}','TodosController@view')->name('todo.view');

Route::post('/todo/save/{id}',[
  'uses' => 'TodosController@save',
  'as' => 'todo.save'
]);
