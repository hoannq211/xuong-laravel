<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'id',
        'name',
        'slug',
        'description',
        'price',
        'discount',
        'stock',
        'category_id',
        'brand_id',
        'img_cover',
        'status',
    ];
}
