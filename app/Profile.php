<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['title','description','url','avatar'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function getAvatar()
    {
        //equivalente a $profile->avatar
        $avatarPath = $this->avatar ? $this->avatar : "avatars/avatar.jpg";
        return 'storage/'.$avatarPath;
    }
    public function followers()
    {
        return $this->belongsToMany('App\User');
    }
}
