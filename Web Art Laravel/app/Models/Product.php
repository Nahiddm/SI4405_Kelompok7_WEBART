<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['product_id', 'name', 'description', 'product_image', 'open_price', 'start_date', 'end_date', 'status'];
}
