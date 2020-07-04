<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;
class SavedPost extends Model
{
    protected $table = 'saved_posts';

    public function user(){
        return $this->belongsTo(User::class);
     }
     
     public function post(){
        return $this->belongsTo(Post::class);
     }
} 
