<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    

    protected $fillable = [
		'name', 'email' ,'message'
	];



    public function post() {
         return $this->belongsTo('Post');
    }


    // each bear climbs many trees
    public function replies() {
        return $this->hasMany('Replies');
    }
}
