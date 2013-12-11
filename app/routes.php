<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'ProjectController@index');
Route::get('{project_directory}/{slug?}', 'ProjectController@show')
    ->where('project_directory', '[a-z\-0-9]+')
    ->where('slug', '[a-z\-0-9/]*');