<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JoinClasses extends Model
{
    protected $table = "joinclass";

    public function Users() {
        return $this->belongsTo('App\Users', 'id');
    }

    public function Projects() {
        return $this->belongsTo('App\Projects', 'class_code');
    }

    public function Class() {
        return $this->belongsTo('App\Class', 'id');
    }
}
