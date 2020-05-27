<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $table = "series";
    protected $guarded = [''];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
