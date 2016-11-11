<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
    	'description',
        'type',
        'Company',
        'text_memo'
    ];
}
