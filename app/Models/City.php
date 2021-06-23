<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    

    public function rooms()
    {
        return $this->hasManyThrough(
            Room::class,
            Hotel::class,
            'city_id', // Foreign key on the environments table...
            'hotel_id', // Foreign key on the deployments table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        );
    }

}
