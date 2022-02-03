<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartsForProduct extends Model
{
    public $timestamps = false;

    public function part_images(){
        return $this->hasMany('App\PartImages', 'part_id', 'id');
    }

    public function parts_product(){
        return $this->belongsToMany('App\Product', 'product_parts', 'part_id', 'product_id');
    }
}
