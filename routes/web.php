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

Route::get('/register', 'AuthController@showRegister');
Route::post('/registerPost', 'AuthController@registerPost');


Route::get('/login', 'AuthController@showLogin');
Route::post('/doLogin', 'AuthController@doLogin');

Route::get('/logout','AuthController@logout');


Route::group(['middleware'=>'cekuser'], function() {

    Route::get('/profile', 'AuthController@getProfileUser');
});
