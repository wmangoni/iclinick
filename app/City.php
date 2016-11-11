<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
    	'name',
	'description'
    ];
    protected $table = 'city';
}
