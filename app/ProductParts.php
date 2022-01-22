<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductParts extends Model
{
    protected $fillable = [
        'product_id','part_id',
    ];

}
