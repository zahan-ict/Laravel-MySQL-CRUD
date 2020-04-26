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
//     return view('home');
// });

Route::get('/','UserController@home');

Route::get('/insertform','UserController@insertform');

Route::post('/insert','UserController@insert');


Route::get('/updateform/{id}','UserController@updateform');

Route::post('/update/{id}', 'UserController@update');

Route::get('/delete/{id}','UserController@delete');



