<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartStorage extends Model
{
    protected $table = 'cart_storage';

    protected $fillable = [
        'id', 'cart_data', 'user_id'
    ];


}
