<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'product_name',
        'description',
        'quantity',
        'image1',
        'image2',
        'price',
        'is_new',
        'seller_id',
        'marca',
        'modelo',
        'origen'
    ];
}
