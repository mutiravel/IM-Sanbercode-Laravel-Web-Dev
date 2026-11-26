<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'description',
        'price',
        'stock',
        'category_id',
    ];

    // Relasi dengan Category (Many to One)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // Relasi dengan Transaction (One to Many)
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }

}
