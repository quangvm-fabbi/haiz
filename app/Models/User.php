<?php

namespace App\Models;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'avatar', 'phone_number', 'address',
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

    public function suggest()
    {
        return $this->hasMany(Suggest::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function cake()
    {
        return $this->belongsToMany(Cake::class);
    }
    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function rate()
    {
        return $this->hasMany(Rate::class);
    }
}