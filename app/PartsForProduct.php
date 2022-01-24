<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartsForProduct extends Model
{
    public $timestamps = false;

    public function parts_product(){
        return $this->belongsToMany('App\Product', 'product_parts', 'part_id', 'product_id');
    }

    public function module_parts(){
        return $this->hasMany('App\ModuleParts', 'part_id', 'id');
    }
}
