<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "post";

    protected $fillable = [
        'username_id', 'data',  'text', 'url',
        'tipe', 'num_like'
    ];


   public function user()
   {
       return $this->belongsTo("App\User");
   }

   public function user_like()
   {
       return $this->belongsToMany("App\User", "likes");
   }

}
