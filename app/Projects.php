<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    protected $table = "projects";

    public function Users() {
        return $this->belongsTo('App\Users', 'id');
    }

    public function Wishlists() {
        return $this->hasMany('App\Wishlists', 'project_id');
    }
}
