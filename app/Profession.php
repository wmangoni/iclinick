<?php

namespace App;

use App\Scopes\OwnerScope;
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
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new OwnerScope);
    }
}
