<?php

namespace App\Models;

use Iluminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
        'created_at',
        'updated_at',

    ];

    /**
     * Summary of category
     * @return BelongsTo<Category, Product>
     */
    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
     * Summary of shop
     * @return BelongsToMany<Shop, Product, \Illuminate\Database\Eloquent\Relations\Pivot>
     */
    public function shop(){
        return $this->belongsToMany(Shop::class)->withPivot('quantity')->withTimestamps();
    }

    public function shelves()
    {
        return $this->belongsToMany(Shelf::class)->withTimestamps();
    }
}
