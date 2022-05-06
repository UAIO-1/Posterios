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
        return $this->belongsTo('App\Classes', 'id');
    }

    public function JoinClass() {
        return $this->hasMany('App\JoinClasses', 'class_code');
    }

    public function Wishlists() {
        return $this->hasMany('App\Wishlists', 'project_id');
    }


}
