<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Agent;

class SuperAgent extends Model
{
    use HasFactory;
    public $table='super_agents';

    protected $fillable = [
        'id',
        'user_id',
    ];

        public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

  
    public function agents()
    {
        return $this->hasMany(Agent::class);
    }

}
