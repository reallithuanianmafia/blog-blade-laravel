<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
    protected $guarded = [''];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function series()
    {
        return $this->belongsTo('App\Series');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag', 'posts_tags');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function seriesCheck()
    {
        if(!$this->series)
        {
            return 'No data';
        }
        else
        {
            return $this->series->name;
        }
    }
}
