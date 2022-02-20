<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actualitie extends Model
{

    protected $fillable = [
        'name','text',
    ];

    public function actualities_lang()
    {
        return $this->belongsToMany('App\Language','actualities_languages','actualities_id','language_id');
    }

}
