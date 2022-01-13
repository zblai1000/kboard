<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartProduct extends Model
{
    use HasFactory;

    protected $table = 'cart_products';
    protected $fillable = ['product_id', 'name', 'price', 'quantity', 'image', 'user_id'];
}
