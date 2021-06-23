<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
class Country extends Model
{
    
    use HasApiTokens,HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'country',
    ];
    public function state()
    {
        return $this->hasMany(State::class);
    }

 


    public function rooms()
    {
        return $this->hasManyThrough(
            Room::class,
            Hotel::class,
            'country_id', // Foreign key on the environments table...
            'hotel_id', // Foreign key on the deployments table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        );
    }

    public function setCountryAttribute($value)
    {
        $this->attributes['country'] = ucfirst($value);
    }
}







// -- All countries

// CREATE TABLE IF NOT EXISTS `countries` (
// 	`id` int(11) NOT NULL AUTO_INCREMENT,
// 	`phone_code` int(5) NOT NULL,
// 	`country_code` char(2) NOT NULL,
// 	`country_name` varchar(80) NOT NULL,
// 	`continent_code` varchar(2) DEFAULT NULL,
// 	`continent_name` varchar(30) DEFAULT NULL,
// 	`alpha_3` char(3) DEFAULT NULL,
// 	PRIMARY KEY (`id`)
// ) ENGINE=InnoDB AUTO_INCREMENT=253 DEFAULT CHARSET=utf8;

// -- https://www.html-code-generator.com/mysql/country-name-table

// 

