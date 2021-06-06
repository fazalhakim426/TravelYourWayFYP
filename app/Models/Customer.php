<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $fillable=[
        'user_id',
        'id',
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function visas()
    {
        $this->hasMany(Visa::class);
    }
}
