<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";

    public function Projects() {
        return $this->hasMany('App\Projects', 'user_id');
    }
}
