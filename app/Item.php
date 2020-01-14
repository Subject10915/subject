<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //
    public function books()
    {
        return $this->belongsTo(Book::class);
    }

    public function rooms()
    {
        return $this->belongsTo(Room::class);
    }
}
