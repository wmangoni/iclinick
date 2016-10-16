<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $fillable = [
	    'name',
		'address',
		'city_id',
		'state_id',
		'zipcode',
		'Phone',
		'Phone_comercial',
		'Phone_cel',
		'prof_id',
		'genre',
		'height',
		'weight',
		'birthday',
		'estado_civil',
		'pai',
		'mae',
		'prontuario',
		'cpf',
		'email',
		'pass',
		'Obs'
	];

	protected $hidden = [
        'pass'
    ];
}
