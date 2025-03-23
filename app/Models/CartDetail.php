<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class CartDetail extends Model
{
    use HasFactory;
    protected $table = 'cart_detail';
    protected $fillable = [
        'id',
        'cart_id',
        'product_id',
        'quantity',
    ];
}
