<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = "projects";

    public function Users() {
        return $this->belongsTo('App\Users', 'id');
    }

    public function Class() {
        return $this->hasMany('App\Classes', 'project_id');
    }

    public function JoinClass() {
        return $this->hasMany('App\JoinClasses', 'class_code');
    }

    public function Wishlists() {
        return $this->hasMany('App\Wishlists', 'project_id');
    }

    public function Questions() {
        return $this->hasMany('App\Questions', 'id');
    }



}
