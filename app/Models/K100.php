<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class K100 extends Model
{
    use HasFactory;

    protected $table = 'k100s';
    protected $fillable = ['sub_image_1', 'sub_image_2', 'sub_image_3', 'sub_image_4', 'sub_image_5'];

}
