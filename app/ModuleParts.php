<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModuleParts extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name','surface',
    ];
}
