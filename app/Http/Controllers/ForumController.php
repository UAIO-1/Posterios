<?php

namespace App\Http\Controllers;

use App\ForumAnswers;
use App\Forums;
use App\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class ForumController extends Controller
{
    public function forumPost(Request $request){

        $this->validate($request,[
            'forum_title' => 'required|min:10|max:50',
            'forum_category' => 'required',
            'forum_message' => 'required|max:10000',
            'forum_image' => 'image|mimes:jpeg,png,jpg|max:3072',
        ]);

        $forum = new Forums();
        $forum->user_id = $request->user_id;
        $forum->name = $request->name;
        $forum->forum_title = $request->forum_title;
        $forum->forum_category = $request->forum_category;
        $forum->forum_subcategory = $request->forum_subcategory;
        $forum->forum_message = $request->forum_message;


        if($request->file('forum_image') == null){
            $forum->forum_image = null;
        } else {
            $path = $request->file('forum_image')->store('images/forum','public');
            $forum->forum_image = $path;
        }

        $forum->save();

        return redirect(url('forum'));
    }

    public function indexForum(Request $request){
        $forums = Forums::take(50)->get();

        return view('/forum', compact('forums'));
    }

    public function getForumID($id){
        $forums = DB::table('forum')
                ->select('users.image', 'users.gender', 'forum.*')
                ->join("users", "users.id", "=", "forum.user_id")
                ->where('forum.id','=',$id)
                ->get();

        $replies = DB::table('forumanswers')
                ->select('users.image', 'users.gender', 'forumanswers.*')
                ->join("users", "users.id", "=", "forumanswers.user_id")
                ->where('forum_id', '=', $id)
                ->get();

        return view('/forumDetail', compact('forums', 'replies'));
    }

    public function postReplyForum(Request $request){

        $reply = new ForumAnswers();
        $reply->forum_id = $request->forum_id;
        $reply->user_id = $request->user_id;
        $reply->username = $request->username;
        $reply->reply_message = $request->reply_message;

        if($request->file('reply_image') == null){
            $reply->reply_image = null;
        } else {
            $path = $request->file('reply_image')->store('images/reply','public');
            $reply->reply_image = $path;
        }


        $reply->save();

        return redirect('/forumDetail/'.$reply->forum_id);
    }

    public function editForum(Request $request){

        $forum = Forums::where('id', '=', $request->id)->first();

        $forum->forum_title = $request->forum_title;
        $forum->forum_category = $request->forum_category;
        $forum->forum_subcategory = $request->forum_subcategory;
        $forum->forum_message = $request->forum_message;

        if ($request->hasFile('forum_image')) {
            $path = 'storage/images/forum'.$forum->forum_image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('forum_image');
            $path = $file->store('images/forum','public');
            $file->move('storage/images/forum',  $path);
            $forum->forum_image = $path;
        }

        $forum->save();

        return redirect('/forumDetail/'.$forum->id);
    }

    public function editReplyForum(Request $request){

        $reply = ForumAnswers::where('id', '=', $request->id)->first();

        $reply->reply_message = $request->reply_message;


        if ($request->hasFile('reply_image')) {
            $path = 'storage/images/reply'.$reply->reply_image;
            if(File::exists($path)){
                File::delete($path);
            }
            $file = $request->file('reply_image');
            $path = $file->store('images/reply','public');
            $file->move('storage/images/reply',  $path);
            $reply->reply_image = $path;
        } elseif($request->file('reply_image') == null){
            $reply->reply_image = null;
        }
        else {
            $path = $request->file('reply_image')->store('images/reply','public');
            $reply->reply_image = $path;
        }


        $reply->save();

        return redirect('/forumDetail/'.$reply->forum_id);
    }

    public function searchForumTitle(Request $request){
        $search = $request->get('search_title');
        $forums = Forums::where("forum_title",'like','%'.$search.'%')
                    ->simplePaginate(15);

        return view('/forum', compact('forums'));
    }

    public function forumDeleteUser($id){
        DB::table('forum')->where('id', $id)->delete();
        return redirect('/forum');
    }


}
