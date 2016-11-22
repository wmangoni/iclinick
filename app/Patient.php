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
    public function getBirthdayAttribute($value)
    {
        return $this->attributes['birthday'] = Carbon::parse($value)->format('d/m/Y');
    }
    public function setBirthdayAttribute($value)
    {
        $this->attributes['birthday'] = Carbon::parse($value)->format('Y-m-d');
    }
    protected $dates = [
        'birthday',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected static $rules = [
        'name' => 'required|min:6',
        'address' => 'required|min:6',
        'city_id' => 'required|numeric',
        'state_id' => 'required|numeric',
        'Phone' => 'required',
        'genre' => 'required',
        'birthday' => 'required',
        'email' => 'required|email',
    ];

    protected static $messages = [
        'min'    => 'O campo :attribute deve ser maior.',
        'required' => 'O campo :attribute é obrigatório.',
    ];

    public static function validate( $data )
    {
        return Validator::make($data, Self::$rules, Self::$message);
    }
    
}
