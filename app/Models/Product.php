<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'cost_price',
        'price',
        'std_stock',
        'stock',
        'category',
        'image',
        'is_best_seller'
    ];
}
