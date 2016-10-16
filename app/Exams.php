<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exams extends Model
{
    protected $fillable = [
    	'description',
		'type',
		'Company',
		'text_memo'
    ];
}
