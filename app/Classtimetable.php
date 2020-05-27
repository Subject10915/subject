<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classtimetable extends Model
{
    //
    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }

    public function classitems()
    {
        return $this->hasMany(Classitem::class);
    }
}
