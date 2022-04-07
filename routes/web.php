<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/home', function () {
    return view('/');
});

Route::get('/register', 'AuthController@showRegister');
Route::post('/registerPost', 'AuthController@registerPost');


Route::get('/login', 'AuthController@showLogin');
Route::post('/doLogin', 'AuthController@doLogin');

Route::get('/logout','AuthController@logout');

Route::get('/myProfile/{id}', 'AuthController@getProfileOther');

Route::get('/forum', 'ForumController@indexForum');
Route::get('/filterForum', 'SearchController@filterForum');

Route::get('/explore', 'ProjectController@indexExploreProjects');
Route::get('/filterProject', 'SearchController@filterProject');


Route::group(['middleware'=>'cekuser'], function() {

    Route::get('/post', function () {
        return view('post');
    });

    Route::get('/forumDetail/{id}', 'ForumController@getForumID');
    Route::post('/postReplyForum', 'ForumController@postReplyForum');

    Route::post('/editForum', 'ForumController@editForum');
    Route::post('/editReplyForum', 'ForumController@editReplyForum');

    Route::get('/explore', 'ProjectController@indexExploreProjects');
    // Route::get('/explore', 'ProjectController@searchProjectTitle');
    Route::get('/filterProject', 'SearchController@filterProject');

    Route::get('/forum', 'ForumController@indexForum');
    Route::post('/postForum', 'ForumController@forumPost');
    // Route::get('/forum', 'ForumController@searchForumTitle');
    Route::get('/filterForum', 'SearchController@filterForum');

    Route::post('/projectPost', 'ProjectController@projectPost');

    Route::get('/myProfile/{id}', 'AuthController@getProfileUser');

    Route::post('/editProfile', 'AuthController@editProfile');

    Route::get('/changepassword/{id}', 'AuthController@getID');
    Route::post('/changepassword', 'AuthController@changePassword');

    Route::get('/projectDetail/{id}', 'ProjectController@getProjectID');
    Route::post('/submitAnswer', 'ProjectController@submitAnswer');

    Route::post('/editProject', 'ProjectController@editProject');

    Route::get('/projectDelete/{id}', 'ProjectController@projectDelete');
});


Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->middleware('verified');

