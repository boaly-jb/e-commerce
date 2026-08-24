<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreProduct extends Model
{
    protected $fillable = [
        'product_name',
        'product_slug',
        'product_price',
        'sale_price',
        'sku',
        'quantity',
        'short_description',
        'description',
        'status',
        'featured',
        'tranding',
        'product_image',
    ];
}
