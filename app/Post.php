<?php

namespace App;

use Illuminate\Database\Eloquent\Model;





class Post extends Model
{

	
    protected $fillable = [
		'title', 'body' 
	];




// DEFINE RELATIONSHIPS --------------------------------------------------
    public function user() {
         return $this->belongsTo('User');
    }


    // each bear climbs many trees
    public function comments() {
        return $this->hasMany('Comment');
    }
    

	

     public function categories() {
        return $this->belongsToMany('App\Category', 'posts_categories', 'post_id', 'category_id');
    }




}
