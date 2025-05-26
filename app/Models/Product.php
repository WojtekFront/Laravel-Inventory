<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey='id';
    protected $fillable = ['name', 'sku' ,'description','price' , 'quantity' ,'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function stockEntries(){
        return $this->hasMany(StockEntry::class);
    }

    public function getFormatedPriceAttribute()
    {
        return number_format( $this->price,2,'.','').' PLN';
    }
}
