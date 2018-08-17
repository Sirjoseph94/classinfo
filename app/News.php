<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Lecturize\Tags\Traits\HasTags;

class News extends Model
{
    use HasTags;
    
    public function user(){
        return $this->belongsTo('App\User');
    }
}
