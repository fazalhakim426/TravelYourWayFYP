<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
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
    public function ticket()
    {
        return $this->hasMany(Ticket::class);
    }
    
    public function visa()
    {
        return $this->hasMany(Visa::class);
    }       
    public function hotel()
    {
        return $this->hasMany(Hotel::class);
    }
}
