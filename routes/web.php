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


Route::get('/', 'ProjectController@randomProjectWelcome');


Route::group(['middleware'=>'cekuser'], function() {

    Route::get('/post', function () {
        return view('post');
    });


    Route::post('/projectPost', 'ProjectController@projectPost');

    Route::get('/profile', 'AuthController@getProfileUser');
    Route::get('/myprojects', 'ProjectController@myProjects');
    Route::get('/profile', 'AuthController@getProfileUserNavbar');
    Route::post('/editProfile', 'AuthController@editProfile');
    Route::post('/editAboutMe', 'AuthController@editAboutMe');


    Route::get('/changepassword/{id}', 'AuthController@getID');
    Route::post('/changepassword', 'AuthController@changePassword');
});

