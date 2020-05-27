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
            return 'Main Category';
        }
        else
        {
            $category = Category::where('id', $this->parent_id)->firstOrFail()->name;
            return $category;
        }
    }
    
    public function series()
    {
        return $this->hasMany('App\Series');
    }
}
