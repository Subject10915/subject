<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //user跟student一對一關聯
    public function user(){
        return $this->belongsTo(User::class);
    }

    //grade跟student多對一關聯
    public function grade(){
        return $this->belongsTo(Grade::class);
    }
}
