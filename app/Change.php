<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Change extends Model
{
    //
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }
}
