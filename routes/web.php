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



/**
 * Display all tasks
 */
Route::get('/','TasksController@index');



/**
 * Add a new task
 */

Route::post('/task', 'TasksController@store');




/**
 * Delete an existing task
 */
Route::delete('/task/{id}', 'TasksController@destroy');