<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function books()
    {
        return $this->hasMany(Book::class);
    }

    //user跟student一對一關聯
    public function student(){
        return $this->hasOne(Student::class);
    }

    //user跟admin一對一關聯
    public function admin(){
        return $this->hasOne(Admin::class);
    }

    public function stas()
    {
        return $this->hasMany(Sta::class);
    }

}
