<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'sku',
        'desription',
        'price',
        'quantity',
        'category_id',
        'shop_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function shop(){
        return $this->hasMany(Shop::class);
    }
}
