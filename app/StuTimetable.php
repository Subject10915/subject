<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StuTimetable extends Model
{
    //
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function studentitems()
    {
        return $this->hasMany(Studentitem::class);
    }
}
