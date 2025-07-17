<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

class Admission extends Model
{
    // protected $table = 'admissions';

    public function student(){
        return $this->belongsTo(Student::class);
    }

    public function isAdmin(){
        $this->role == 'admin ' ; return 'admin';
        // echo "Admin";
    }
    
}
