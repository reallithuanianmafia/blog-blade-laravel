<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Relationships
     */
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }
    public function savedposts()
    {
        return $this->hasMany('App\SavedPost');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    /**
     * Role check
     */
    public function hasRole($role)
    {
        if($this->roles()->whereIn('name', [$role])->first())
        {
            return true;
        }
        else
        {
            return false;
        }
    }

}
