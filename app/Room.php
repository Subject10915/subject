<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
    public function details()
    {
        return $this->hasMany(Detail::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
