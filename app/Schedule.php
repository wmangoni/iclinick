<?php

namespace App;

use App\Scopes\OwnerScope;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
    	'name',
        'date',
        'segment',
        'description',
        'status',
        'doctor_id',
        'Obs'
    ];
    protected $table = 'schedule';

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new OwnerScope);
    }
}
