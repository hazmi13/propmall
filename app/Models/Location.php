<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';
    protected $primaryKey = 'location_id';
    public $timestamps = false;


    public function property()
    {
        return $this->hasMany(Property::class, 'property_location_id', 'location_id');
    }
}
