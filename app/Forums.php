<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Forums extends Model
{
    protected $table = "forum";

    public function Users() {
        return $this->belongsTo('App\Users', 'id');
    }
}
