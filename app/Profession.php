<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable = [
    	'name',
		'description'
	];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
