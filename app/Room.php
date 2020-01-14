<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    public function items()
    {
        return $this->hasMany(Item::class);
    }

    public function stas()
    {
        return $this->hasMany(Sta::class);
    }
}
