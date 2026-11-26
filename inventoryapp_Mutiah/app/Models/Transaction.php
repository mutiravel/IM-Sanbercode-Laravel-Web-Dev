<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'product_id',
        'user_id',
        'type',
        'amount',
        'notes',
    ];

    // Relasi dengan Product (Many to One)
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Relasi dengan User (Many to One)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}