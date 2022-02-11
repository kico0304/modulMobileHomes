<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OptionsForProduct extends Model
{
    public $timestamps = false;

    public function option_images(){
        return $this->hasMany('App\OptionImages', 'option_id', 'id');
    }

}
