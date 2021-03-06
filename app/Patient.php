<?php

namespace App;

use App\Scopes\OwnerScope;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Validator;

class Patient extends Model
{
    use SoftDeletes;

    protected $fillable = [
	    'name',
        'address',
        'city_id',
        'state_id',
        'zipcode',
        'phone',
        'phone_comercial',
        'phone_cel',
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
        'obs'
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
        $data = explode('-', $value);
        $data = implode('/', array_reverse($data));
        return $this->attributes['birthday'] = $data;
    }
    public function setBirthdayAttribute($value)
    {
        $data = explode('/', $value);
        $data = implode('-', array_reverse($data));
        $this->attributes['birthday'] = $data;
    }

    public function setHeightAttribute($value)
    {
        $this->attributes['height'] = ($value == '') ? NULL : $value;
    }
    public function setWeightAttribute($value)
    {
        $this->attributes['weight'] = ($value == '') ? NULL : $value;
    }

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected static $rules = [
        'name' => 'required|min:6',
        'address' => 'required|min:6',
        'city_id' => 'required|numeric',
        'state_id' => 'required|numeric',
        'phone' => 'required',
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
        return Validator::make($data, Self::$rules, Self::$messages);
    }

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new OwnerScope);
    }
}
