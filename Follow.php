<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        'follower_id', 'followed_id'
    ];


    public function user(){
        return $this->belongsTo("App\User", "follower_id");
    }

    public function user_follow(){
        return $this->belongsTo("App\User", "followed_id");
    }

}
