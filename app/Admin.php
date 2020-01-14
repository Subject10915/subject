<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //user跟admin一對一關聯
    public function user(){
        return $this->belongsTo(User::class);
    }
}
