<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = [
        'idpost_id', 'userlike_id'
    ];

    public function user(){
        return $this->belongsToMany("App\User", "userlike_id");
    }

    public function post(){
        return $this->belongsToMany("App\Models\Post", "idpost_id");
    }
}
