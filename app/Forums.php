<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forums extends Model
{
    protected $table = "forum";

    public function Users() {
        return $this->belongsTo('App\Users', 'id');
    }

    public function ReplyForums() {
        return $this->hasMany('App\ForumAnswer', 'forum_id');
    }
}
