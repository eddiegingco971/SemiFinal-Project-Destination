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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'SiteController@index');

Route::get('/destinations', 'DestinationController@index');
Route::post('/destinations', 'DestinationController@store');

Route::get('/destinations/create', 'DestinationController@create');
