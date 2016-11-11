<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
    	'name',
        'email',
        'birthday',
        'address',
        'city_id',
        'state_id',
        'zipcode',
        'Phone',
        'Phone_cel',
        'genre',
        'crm',
        'crm_status',
        'pass',
        'status',
        'obs'
    ];

    protected $hidden = [
        'pass'
    ];
}
