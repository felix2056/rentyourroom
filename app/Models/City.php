<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function properties()
    {
        return $this->hasMany(Property::class, 'neighbourhood_id');
    }

    public function getRoomsCountAttribute()
    {
        return $this->properties->sum('rooms_for_rent');
    }

    public function getRoommatesCountAttribute()
    {
        return $this->properties->sum('occupants');
    }
}
