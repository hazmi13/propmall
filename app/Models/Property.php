<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $table = 'property';
    protected $primaryKey = 'property_id';
    public $timestamps = false;


    protected $fillable = [
        'property_title',
        'property_description',
        'property_location_id',
        'property_built_size',
        'property_land_size',
        'property_room',
        'property_bathroom',
        'property_date'
    ];

    public function location()
    {
        return $this->belongsTo(Location::class, 'property_location_id', 'location_id');
    }

    public function photos()
    {
        return $this->hasMany(PropertyPhoto::class, 'property_id');
    }

    public function price()
    {
        return $this->hasMany(PropertyPrice::class, 'property_id');
    }
}
