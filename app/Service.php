<?php

namespace App;

use App\Scopes\OwnerScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
    	'name',
        'description'
    ];
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new OwnerScope);
    }
}
