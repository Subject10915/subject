<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    public $fillable = ['id','user_id','indatetime','outdatetime','count','reason' ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(Item::class);
    }
}
