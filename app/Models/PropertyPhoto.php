<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PropertyPhoto extends Model
{
    protected $table = 'property_photos';
    protected $primaryKey = 'photo_id';
    public $timestamps = false;

    protected $fillable = ['property_id', 'photo_file_name', 'photo_cover'];

    public function property()
    {
        return $this->belongsTo(Property::class, 'property_id', 'property_id');
    }
}

