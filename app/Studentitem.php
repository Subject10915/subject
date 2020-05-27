<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Studentitem extends Model
{
    //
    public function stutimetables()
    {
        return $this->belongsTo(StuTimetable::class);
    }

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}
