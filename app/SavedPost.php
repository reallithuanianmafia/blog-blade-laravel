<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SavedPost extends Model
{
    protected $table = 'saved_posts';
    public function users()
    {
        return $this->belongsToMany('App\User','saved_posts');
    }
    public function posts()
    {
        return $this->belongsToMany('App\Post','saved_posts');
    }
}
