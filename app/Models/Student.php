<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    public function admission(){
        return $this->hasOne(Admission::class);
    }
}

 