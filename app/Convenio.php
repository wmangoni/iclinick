<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $fillable = [
    	'cod',
    	'name',
        'description'
    ];
}
