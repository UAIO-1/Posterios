<?php

namespace App\Http\Controllers;

use App\Forums;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function forumPost(Request $request){

        $this->validate($request,[
            'forum_title' => 'required|min:10|max:100',
            'forum_category' => 'required',
            'forum_message' => 'required',
            'forum_image' => 'image|mimes:jpeg,png,jpg|max:10240',
        ]);

        $forum = new Forums();
        $forum->user_id = $request->user_id;
        $forum->username = $request->username;
        $forum->forum_title = $request->forum_title;
        $forum->forum_category = $request->forum_category;
        $forum->forum_message = $request->forum_message;


        if($request->file('forum_image') == null){
            $forum->forum_image = null;
        } else {
            $path = $request->file('forum_image')->store('videos/forum','public');
            $forum->forum_image = $path;
        }

        $forum->save();

        return redirect(url('forum'));
    }

    public function indexForum(Request $request){
        $forums = Forums::take(15)
                ->inRandomOrder()
                ->get();

        return view('/forum', compact('forums'));
    }



}
