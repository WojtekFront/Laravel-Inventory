<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable =[
        'name',
        'address',
        'active',

    ];
    // public function product(){
    //     return $this->hasMany(Product::class);
    // }
}
