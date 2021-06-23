<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agent;
use Illuminate\Database\Eloquent\SoftDeletes;

class SuperAgent extends Model
{
    use SoftDeletes, HasFactory;
    public $table = 'super_agents';
    public $timestamps=false;

    protected $fillable = [
        'id',
        'user_id',
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }


    public function bookings()
    {
        return $this->hasManyThrough(
            Booking::class,
            Hotel::class,
            'super_agent_id', // Foreign key on the environments table...
            'hotel_id', // Foreign key on the deployments table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        );
    }

    public function paid_visas()
    {

        return $this->hasMany(Visa::class, 'super_agent_id', 'id')->where('status', 'Paid');
    }
    public function visas()
    {

        return $this->hasMany(Visa::class, 'super_agent_id', 'id');
    }

    public function Tickets()
    {

        return $this->hasMany(Ticket::class, 'super_agent_id', 'id');
    }

    public function agents()
    {
        return $this->hasMany(Agent::class);
    }
}
