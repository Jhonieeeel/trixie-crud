<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_name',
        'ratings',
        'reviews',
        'price',
        'image',
        'state'
    ];

    public function mywishlist() {
        return $this->hasMany(Wishlist::class);
    }

}