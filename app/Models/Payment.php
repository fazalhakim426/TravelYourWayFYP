<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'charges',
        'paymentable',
        'payment_id',
        'charges',
        'paymentable',
        'payment_id',
    ];
    public function paymentable()
    {
        return $this->morphTo();
    }
}
