<?php

namespace App\Http\Controllers;

use App\ForumAnswers;
use App\Forums;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function getForumID($id){
        $forums = DB::table('forum')
                ->where('id','=',$id)
                ->get();

        $users = DB::table("forum")
                ->select("users.image")
                ->join("users", "forum.user_id", "=", "users.id")
                ->first();

        $replies = DB::table('forumanswers')
                ->where('forum_id', '=', $id)
                ->get();

        return view('/forumDetail', compact('forums', 'users', 'replies'));
    }

    public function postReplyForum(Request $request){

        $this->validate($request,[
            'reply_message' => 'required',
        ]);

        $reply = new ForumAnswers();
        $reply->forum_id = $request->forum_id;
        $reply->user_id = $request->user_id;
        $reply->username = $request->username;
        $reply->reply_message = $request->reply_message;

        $reply->save();

        return redirect('/forumDetail/'.$reply->forum_id);
    }



}
