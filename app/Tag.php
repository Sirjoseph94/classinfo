<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;


class Tag extends Model
{
    use Eloquence;

 

    // public function getRouteKeyName()
    // {
    //     return 'code';
    // }

    protected $searchableColumns = ['id','name', 'code'];

    protected $fillable = ['name', 'code'];

    public function news() {
        return $this->belongsToMany('App\News');
    }

    public function user() {
        return $this->belongsToMany('App\User');
    }

    
}
