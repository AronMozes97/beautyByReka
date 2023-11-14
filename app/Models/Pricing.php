<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $table = 'pricing';

    // If you want to allow mass-assignment on some of your columns
    protected $fillable = [
        'name',
        'category',
        'duration',
        'price',
        'features',
        'rental_id',
    ];

    public function rental()
    {
        return $this->belongsTo(Rental::class, 'rental_id');
    }
}
