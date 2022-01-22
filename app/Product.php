<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    public $timestamps = false;

    public function images()
    {
        return $this->hasMany('App\ProductImages', 'product_id', 'id');
    }

    public function product_parts()
    {
        return $this->belongsToMany('App\PartsForProduct', 'product_parts', 'product_id', 'part_id');
    }
}
