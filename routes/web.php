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

Route::view('/', 'pages.home')->name('home');
Route::view('/history', 'pages.history')->name('history');

Route::get('/divisions', 'DivisionController@index')->name('division.index');
Route::get('/divisions/{division}', 'DivisionController@show')->name('division.show');

require_once 'partials/policies.php';
