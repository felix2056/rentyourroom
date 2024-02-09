<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function getNeighbourhoodSlugAttribute()
    {
        return strtolower(str_replace(' ', '-', $this->attributes['neighbourhood']));
    }

    public function getFeaturedImageAttribute()
    {
        if (!$this->attributes['featured_image']) {
            return 'https://via.placeholder.com/1000';
        }

        return asset('storage/' . $this->attributes['featured_image']);
    }

    public function getCurrencyRoompriceAttribute()
    {
        return '₦' . number_format($this->attributes['roomprice']);
    }

    public function getCurrencyRoomsecurityDepositAttribute()
    {
        return '₦' . number_format($this->attributes['roomsecurity_deposit']);
    }
    
}
