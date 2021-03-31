<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasFactory, Notifiable;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
    protected $fillable = [
        'name',
        'email',
        'password',
        'address',
        'phone_number',
        'membership',
    ];
    protected $attributes = [
        'membership' => 'Customer',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *  s
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
    
    public function visa()
    {
        return $this->hasMany(Visa::class);
    }
    
  
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function setMembershipAttribute($value)
    {
        $this->attributes['membership'] = ucfirst($value);
    }
}
