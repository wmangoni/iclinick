<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Module extends Model
{
    protected $fillable = [
        'name',
        'route',
        'status',
        'icon'
    ];

    protected static $rules = [
        'name' => 'required|min:6',
        'route' => 'required|min:6',
        'status' => 'required',
    ];

    protected static $messages = [
        'min'    => 'O campo :attribute deve ser maior.',
        'required' => 'O campo :attribute é obrigatório.',
    ];

    public static function validate( $data )
    {
        return Validator::make($data, Self::$rules, Self::$messages);
    }

}
