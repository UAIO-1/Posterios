<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = "projects";

    public function users() {
        return $this->belongsTo('App\Users', 'user_id');
    }
}
