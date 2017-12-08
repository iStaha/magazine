<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Replies extends Model
{
     public function user() {
         return $this->belongsTo('Comment');
    }
}
