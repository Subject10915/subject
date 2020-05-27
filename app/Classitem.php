<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classitem extends Model
{
    //
    public function classtimetables()
    {
        return $this->belongsTo(Classtimetable::class);
    }

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}
