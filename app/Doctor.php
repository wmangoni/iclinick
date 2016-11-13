<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ModelBase;

class Doctor extends ModelBase
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

    public function city()
    {
        return $this->belongsTo('App\City','id');
    }
}
