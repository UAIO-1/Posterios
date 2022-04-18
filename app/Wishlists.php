<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlists extends Model
{
    protected $table = "wishlists";

    public function users() {
        return $this->belongsTo('App\User', 'id');
    }

    public function projects() {
        return $this->belongsTo('App\Projects', 'id');
    }


}
