<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname',  'username', 'birth',
        'photo', 'email', 'password'
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

    public function post(){
        return $this->hasMany("App\Models\Post");
    }

    public function follow(){
        //return $this->belongsToMany("App\Models\Follow", "follows", "followed_id", "follower_id");
        return $this->belongsToMany("App\User", "follows", "followed_id", "follower_id");
    }

    public function followed(){
        //return $this->belongsToMany("App\Models\Follow", "follows", "follower_id", "followed_id");
        return $this->belongsToMany("App\User", "follows", "follower_id", "followed_id")->withTimestamps();
    }

    public function post_like(){
        return $this->belongsToMany("App\Models\Post", "likes", "userlike_id", "idpost_id");
    }

    /*public function like(){
        return $this->hasMany("App\Models\Like", "userlike_id");
    }*/

    public function setPhotoAttribute($value){
        $path = $value ? Storage::disk("public")->put("userImage", $value) : null;
        $this->attributes["photo"]=$path;
    }

    public function getPhotoAttribute($value){
        return $value ? Storage::disk("public")->url($value) : asset("images\default.png");
    }

}
