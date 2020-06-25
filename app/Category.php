<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $guarded = [''];

    public function checkParent()
    {
        if($this->parent_id == NULL)
        {
            return '<span class="badge badge-danger">Main Category</span>';
        }
        else
        {
            $category = Category::where('id', $this->parent_id)->firstOrFail()->name;
            return '<span class="badge badge-primary">'.$category.'</span>';
        }
    }
    
    public function series()
    {
        return $this->hasMany('App\Series');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
