<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','description'];


    public function comments(){

        return $this->hasMany(Comment::class);
    }
}


