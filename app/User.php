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
        'name', 'email', 'password','username'
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
    protected $casts = ['email_verified_at' => 'datetime'];
    
    public function profile ()
    {
        return $this->hasOne('App\Profile');
    }

    public function Posts()
    {
        return $this->hasMany('App\Post')->orderBy('created_at','DESC');
    }
    /*public static function boot()
    {
        //parent::boot();
        static::created(function ($user) {
            $user->profile()->create(['title' => 'votre profil'. $user->username]);
        }
        );

    }*/
    public function following()
    {
        return $this->belongsToMany('App\Profile');
    }



}
