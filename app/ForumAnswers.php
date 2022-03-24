<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForumAnswers extends Model
{
    protected $table = "forumanswers";

    public function Forums() {
        return $this->belongsTo('App\Forums', 'id');
    }

    public function Projects() {
        return $this->hasMany('App\Users', 'id');
    }

}
