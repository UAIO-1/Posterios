<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = "question_project";

    public function Projects() {
        return $this->belongsTo('App\Projects', 'project_id');
    }

    public function Users() {
        return $this->belongsTo('App\Users', 'id');
    }
}
