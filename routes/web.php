<?php

use App\Exports\NilaiExport;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel as Export;

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

Route::get('/logout','AuthController@logout');

Route::get('/','ProjectController@indexProjectWelcome');


Route::group(['middleware'=>'cekuser'], function() {

    Route::get('/','ProjectController@indexProjectWelcome');

    Route::get('/post', function () {
        return view('post');
    });

    Route::get('/forumDetail/{id}', 'ForumController@getForumID');
    Route::post('/postReplyForum', 'ForumController@postReplyForum');

    Route::post('/editForum', 'ForumController@editForum');
    Route::post('/editReplyForum', 'ForumController@editReplyForum');

    Route::get('/explore', 'ProjectController@indexExploreProjects');
    Route::get('/filterProject', 'SearchController@filterProject');
    Route::post('/addToWishlists', 'ProjectController@addToWishlists');
    Route::get('/wishlistDelete/{id}', 'ProjectController@wishlistDelete');
    Route::get('/wishlistDeleteDetail/{id}', 'ProjectController@wishlistDeleteDetail');

    Route::get('/forum', 'ForumController@indexForum');
    Route::post('/postForum', 'ForumController@forumPost');
    Route::get('/filterForum', 'SearchController@filterForum');

    Route::post('/projectPost', 'ProjectController@projectPost');

    Route::get('/myProfile/{id}', 'AuthController@getProfileUser');

    Route::post('/editProfile', 'AuthController@editProfile');

    Route::get('/projectDetail/{id}', 'ProjectController@getProjectID');
    Route::post('/submitAnswer', 'ProjectController@submitAnswer');

    Route::post('/editProject', 'ProjectController@editProject');

    Route::get('/projectDelete/{id}', 'ProjectController@projectDelete');

    Route::get('/forumDeleteUser/{id}', 'ForumController@forumDeleteUser');

    Route::get('/class', function () {
        return view('class');
    });

    Route::get('/class', 'ClassController@indexClass');
    Route::post('/createClass', 'ClassController@createClass');
    Route::get('/classDetail/{id}', 'ClassController@getClassID');

    Route::post('/joinClass', 'ClassController@joinClass');



    Route::post('/postingProyekKelas', 'ProjectController@postingProyekKelas');

    Route::get('/post', 'ClassController@selectClass');

    Route::post('/approveStudent', 'ClassController@approveStudent');


    Route::get('/daftarNilai/{id}', function(Request $request){

        $nilai = DB::table('projects')
                    ->select('class.*', 'projects.name as username', 'question_project.*', 'users.*')
                    ->join('question_project', 'question_project.project_id', '=', 'projects.id')
                    ->join('users', 'users.id', '=', 'question_project.user_id')
                    ->join('class', 'class.id', '=', 'projects.class_id')
                    ->where('class.id', '=', $request->id)
                    ->where('users.role', '=', 'Teacher')
                    ->where('question_project.user_id', '=', Auth::user()->id)
                    ->orderBy('username', 'asc')
                    ->get();

        $class = DB::table('class')
                    ->where('id','=', $request->id)
                    ->first();

        $pdf = Pdf::loadView('daftarNilai', compact('nilai', 'class'));
        return $pdf->download('daftarNilai.pdf');


    });


    Route::get('/daftarNilaiExcel/{id}', function(Request $request){

        $class = DB::table('class')
                    ->where('id','=', $request->id)
                    ->first();

        $filename = urlencode("Daftar_Nilai_".$class->class_name.date("_Y-m-d").".xls");


        return Export::download(new NilaiExport, $filename);
    });



});

Route::group(['middleware'=>'cekadmin'], function() {
    Route::get('/admin.dashboard', function () {
        return view('/admin.dashboard');
    });

    Route::get('/admin.dashboard', 'AdminController@count');

    Route::get('/admin.users', function () {
        return view('/admin.users');
    });

    Route::get('/admin.users', 'AdminController@indexUsers');
    Route::get('/admin.users/{id}', 'AdminController@indexUsers');

    Route::get('/admin.projects', 'AdminController@indexProjects');
    Route::get('/admin.projects/{id}', 'AdminController@indexProjects');

    Route::get('/userDelete/{id}', 'AdminController@userDelete');

    Route::get('/admin.forums', function () {
        return view('/admin.forums');
    });

    Route::get('/admin.forums', 'AdminController@indexForums');
    Route::get('/admin.forums/{id}', 'AdminController@indexForums');

    Route::get('/forumDelete/{id}', 'AdminController@forumDelete');

    Route::get('/admin.verifikasiuser', 'AdminController@indexPending');
    Route::post('/approve', 'AdminController@approve');

    Route::get('/verifDelete/{id}', 'AdminController@verifDelete');
});

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->middleware('verified');

