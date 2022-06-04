<?php

namespace App\Http\Controllers;

use App\Forums;
use App\Projects;
use App\Questions;
use App\User;
use App\Wishlists;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function projectPost(Request $request){

        $this->validate($request,[
            'project_title' => 'required|min:6|max:30',
            'project_category' => 'required',
            'project_subcategory' => 'required',
            'project_image' => 'required|image|mimes:jpeg,png,jpg|max:3072',
            'project_video' => 'max:10240',
            'project_description' => 'max:10000',
        ]);

        $project = new Projects();
        $project->user_id = $request->user_id;
        $project->name = $request->name;
        $project->gender = $request->gender;
        $project->project_title = $request->project_title;
        $project->project_category = $request->project_category;
        $project->project_subcategory = $request->project_subcategory;
        $project->project_link = $request->project_link;

        $path = $request->file('project_image')->store('images/project','public');
        $project->project_image = $path;

        $project->project_description = $request->project_description;

        if($request->file('project_video') == null){
            $project->project_video = null;
        } else {
            $path = $request->file('project_video')->store('videos/project','public');
            $project->project_video = $path;
        }

        $project->project_video_link = $request->project_video_link;

        $project->save();

        return redirect(url('/explore'))->with('success-buat', 'Proyek berhasil di posting!');
    }


    public function getProjectID ($id){

        if(!Auth::check())
        {
            $projects = DB::table('projects')
                        ->where('id','=', $id)
                        ->get();

            $users = DB::table("users")
                        ->select("users.image", "users.gender", "users.id", "users.jurusan")
                        ->join("projects", "projects.user_id", "=", "users.id")
                        ->first();

            return view('projectDetail', compact('projects', 'users'));
        }
        else
        {
            $projects = DB::table('projects')
                        ->where('id','=', $id)
                        ->get();

            $users = DB::table("users")
                        ->select("users.image", "users.gender", "users.id", "users.jurusan")
                        ->join("projects", "projects.user_id", "=", "users.id")
                        ->first();

            $answers = Questions::select('project_id')->where('user_id', Auth::user()->id)->get();
            $answerArr = Arr::flatten($answers->toArray());

            $questions = DB::table('question_project')
                        ->select('users.*', 'question_project.*')
                        ->join('users', 'users.id', '=', 'question_project.user_id')
                        ->where('project_id', '=', $id)
                        ->orderBy('users.role', 'desc')
                        ->get();

            $wishses = DB::table('wishlists')->select('id')->where('user_id', Auth::user()->id)->first();

            $wishlists = Wishlists::select('project_id')->where('user_id', Auth::user()->id)->get();
            $wishlistsArr = Arr::flatten($wishlists->toArray());

            return view('projectDetail', ['projects'=>$projects, 'users'=>$users, 'answers'=>$answerArr, 'questions'=>$questions, 'wishlists'=>$wishlistsArr], compact('wishses'));
        }


    }

    public function editProject(Request $request){

        $projects = Projects::where('id', '=', $request->id)->first();

        $this->validate($request,[
            'project_title' => 'min:6|max:30',
            'project_image' => 'image|mimes:jpeg,png,jpg|max:10240',
            'project_video' => 'max:30720',
            'project_description' => 'max:10000',
        ]);

        $projects->project_title = $request->project_title;
        $projects->project_category = $request->project_category;
        $projects->project_subcategory = $request->project_subcategory;


        if ($request->hasFile('project_image')) {
            $path = 'storage/images/project'.$projects->project_image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('project_image');
            $path = $file->store('images/project','public');
            $file->move('storage/images/project', $path);
            $projects->project_image = $path;
        }

        $projects->project_link = $request->project_link;
        $projects->project_description = $request->project_description;
        $projects->project_video_link = $request->project_video_link;

        if ($request->hasFile('project_video')) {
            $path = 'storage/videos/project'.$projects->project_video;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('project_video');
            $path = $file->store('videos/project','public');
            $file->move('storage/videos/project', $path);
            $projects->project_video = $path;
        }

        $projects->save();
        return redirect('/projectDetail/'.$projects->id)->with('success-edit', 'Proyek berhasil diubah!');
    }

    public function projectDelete($id){
        DB::table('projects')->where('id', $id)->delete();
        return redirect('/explore')->with('success-hapus', 'Proyek berhasil dihapus!');
    }

    public function indexExploreProjects(Request $request){

        if(!Auth::check())
        {
            $projects = Projects::join('users', 'users.id', '=', 'projects.user_id')->orderBy('created_at', 'desc')->select('projects.*', 'users.image')->get();

            return view('/explore', compact('projects'));
        }
        else
        {
            $projects = Projects::join('users', 'users.id', '=', 'projects.user_id')->orderBy('created_at', 'desc')->select('projects.*', 'users.image')->get();
            $wishes = DB::table('wishlists')->select('id')->where('user_id', Auth::user()->id)->first();
            $wishlists = Wishlists::select('project_id')->where('user_id', Auth::user()->id)->get();
            $wishlistsArr = Arr::flatten($wishlists->toArray());

            return view('/explore', ['projects'=>$projects, 'wishes'=>$wishes, 'wishlists'=>$wishlistsArr]);
        }

    }

    public function submitAnswer(Request $request){

        $question = new Questions();
        $question->user_id = $request->user_id;
        $question->project_id = $request->project_id;
        $question->name = $request->name;
        $question->first_answer = $request->first_answer;
        $question->second_answer = $request->second_answer;
        $question->third_answer = $request->third_answer;
        $question->strength = $request->input('kel1') . '-' .
                                $request->input('kel2') . '-' .
                                $request->input('kel3');
        $question->weakness = $request->input('kek1') . '-' .
                                $request->input('kek2') . '-' .
                                $request->input('kek3');
        $question->recommendation = $request->recommendation;
        $question->points = $request->points;

        $question->save();

        return redirect('/projectDetail/'.$question->project_id);
    }

    public function addToWishlists(Request $request){

        $wishlist = new Wishlists();
        $wishlist->user_id = $request->user_id;
        $wishlist->project_id = $request->project_id;

        $wishlist->save();

        return redirect('/explore');

    }

    public function wishlistDelete($id){
        DB::table('wishlists')->where('id', $id)->delete();
        return redirect('/myProfile/'.Auth::user()->id);
    }

    public function wishlistDeleteDetail($id){

        DB::table('wishlists')->where('id', $id)->delete();

        return redirect('/explore');
    }

    public function indexProjectWelcome(){

        $projects = Projects::orderBy('created_at', 'desc')->paginate(4);

        return view('welcome', compact('projects'));
    }


    public function postingProyekKelas(Request $request){

        $this->validate($request,[
            'project_title' => 'required|min:6|max:20',
            'project_category' => 'required',
            'project_subcategory' => 'required',
            'project_image' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'project_video' => 'max:30720',
            'project_description' => 'max:10000',
        ]);

        $project = new Projects();
        $project->user_id = $request->user_id;
        $project->class_id = $request->class_id;
        $project->name = $request->name;
        $project->gender = $request->gender;
        $project->project_title = $request->project_title;
        $project->project_category = $request->project_category;
        $project->project_subcategory = $request->project_subcategory;
        $project->project_link = $request->project_link;

        $path = $request->file('project_image')->store('images/project','public');
        $project->project_image = $path;

        $project->project_description = $request->project_description;

        if($request->file('project_video') == null){
            $project->project_video = null;
        } else {
            $path = $request->file('project_video')->store('videos/project','public');
            $project->project_video = $path;
        }

        $project->project_video_link = $request->project_video_link;

        $project->save();

        return redirect(url('/classDetail/'.$project->class_id))->with('success-buat', 'Proyek berhasil di posting!');
    }


}
