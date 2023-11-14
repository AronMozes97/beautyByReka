<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
    ];

    public function pricings()
    {
        return $this->hasMany(Pricing::class, 'rental_id');
    }
}
