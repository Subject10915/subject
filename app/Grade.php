<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    //grade跟student多對一關聯
    public function student(){
        return $this->hasMany(Student::class);
    }
}
