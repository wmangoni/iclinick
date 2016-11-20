<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
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

    public function payment()
    {
        return $this->hasMany('App\Payment');
    }
    public function setBirthdayAttribute($value)
    {
        $data = explode('/', $value);
        $data = array_reverse($data);
        $this->attributes['birthday'] = implode('-', $data);
        //$this->attributes['birthday'] = Carbon::createFromFormat('Y-m-d', $value)->toDateTimeString();
    }
    protected $dates = [
        'birthday',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
    
}
