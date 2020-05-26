<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function changes()
    {
        return $this->hasMany(Change::class);
    }
}
