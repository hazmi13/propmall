<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPrice extends Model
{
    protected $table = 'property_prices';
    public $timestamps = false;

    protected $fillable = [
        'property_id',
        'price_year',
        'price_amount'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}
