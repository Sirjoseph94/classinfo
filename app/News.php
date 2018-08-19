<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
// use Lecturize\Tags\Traits\HasTags;

class News extends Model
{
  
    
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function tags() {
        
        return $this->belongsToMany('App\Tag');
    }

    
}
