<?php

namespace App\Http\Controllers;

use App\Projects;
use App\Questions;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function projectPost(Request $request){

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

        return redirect(url('/'));
    }


    public function getProjectID ($id){

        $projects = DB::table('projects')
                    ->where('id','=', $id)
                    ->get();

        $users = DB::table("users")
                    ->select("users.image", "users.gender", "users.id")
                    ->join("projects", "projects.user_id", "=", "users.id")
                    ->first();

        $answers = Questions::select('project_id')->where('user_id', Auth::user()->id)->get();
        $answerArr = Arr::flatten($answers->toArray());

        return view('projectDetail', ['projects'=>$projects, 'users'=>$users, 'answers'=>$answerArr]);
    }

    public function getProjectIDGuest($id){

        $projects = DB::table('projects')
                    ->where('id','=', $id)
                    ->get();

        $users = DB::table("users")
                ->select("users.image", "users.gender", "users.id")
                ->join("projects", "projects.user_id", "=", "users.id")
                ->first();

        return view('projectDetail', compact('projects', 'users'));
    }


    public function getProfile(){
        $users = DB::table('users')
                ->where('users.id', '=', Auth::user()->id)
                ->get();

        $projects = DB::table('projects')
                ->where('id','=', Auth::user()->id)
                ->get();

        return view('myProfile', compact('users', 'projects'));
    }

    public function editProject(Request $request){

        $projects = Projects::where('id', '=', $request->id)->first();

        $projects->project_title = $request->project_title;
        $projects->project_category = $request->project_category;
        $projects->project_link = $request->project_link;

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

        $projects->project_description = $request->project_description;

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
        return redirect('/projectDetail/'.$projects->id);
    }

    public function projectDelete($id){
        DB::table('projects')->where('id', $id)->delete();
        return redirect('/myProfile');
    }

    public function indexProjects(Request $request){
        $projects = Projects::take(5)->get();

        return view('welcome', compact('projects'));
    }

    public function indexExploreProjects(Request $request){
        $projects = Projects::all();

        $users = DB::table("projects")
            ->select("users.image", "users.gender")
            ->join("users", "projects.user_id", "=", "users.id")
            ->first();

        return view('/explore', compact('projects', 'users'));
    }

    public function submitAnswer(Request $request){

        $question = new Questions();
        $question->user_id = $request->user_id;
        $question->project_id = $request->project_id;
        $question->first_answer = $request->first_answer;
        $question->second_answer = $request->second_answer;
        $question->third_answer = $request->third_answer;
        $question->strength = $request->strength;
        $question->weakness = $request->weakness;
        $question->recommendation = $request->recommendation;
        $question->points = $request->points;

        $question->save();

        return redirect('/projectDetail/'.$question->project_id);
    }



}
