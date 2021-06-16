<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
      public $timestamps=false;
    protected $fillable = [
        'charges',
        'paymentable_type',
        'paymentable_id',
        'id',
    ];
    public function paymentable()
    {
        return $this->morphTo();
    }
}
