<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role',
        'identifier', // Combined NIM/NUPTK
        'phone',
        'avatar',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Accessor for avatar
    public function getAvatarAttribute($value)
    {
        return $value ?? asset('assets/images/avatar.png'); // Default avatar path
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function queues()
    {
        return $this->hasMany(Queue::class);
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }

    public function cartItems()
    {
        return $this->hasMany(CartItem::class);
    }
}