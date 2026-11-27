<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name',
        'description'
    ];

    // Relasi dengan Product (One to Many)
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
