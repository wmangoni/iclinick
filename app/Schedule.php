<?php

namespace App;

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
}
