<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_id',
    ];
   
    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
}
