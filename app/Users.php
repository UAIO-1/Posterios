<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";

    public function Projects() {
        return $this->hasMany('App\Projects', 'user_id');
    }

    public function Forums() {
        return $this->hasMany('App\Forums', 'user_id');
    }

    public function ReplyForums() {
        return $this->hasMany('App\ForumAnswers', 'user_id');
    }

    public function Question() {
        return $this->hasMany('App\Questions', 'user_id');
    }

    public function Wishlist() {
        return $this->hasMany('App\Wishlists', 'user_id');
    }

    public function Class() {
        return $this->hasMany('App\Classes', 'user_id');
    }

    public function JoinClass() {
        return $this->hasMany('App\JoinClasses', 'user_id');
    }



}
