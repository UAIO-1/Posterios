<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = "class";


    public function Users() {
        return $this->belongsTo('App\Users', 'id');
    }

    public function JoinClass() {
        return $this->hasMany('App\JoinClasses', 'class_id');
    }

    public function Projects() {
        return $this->belongsTo('App\Projects', 'id');
    }
}
