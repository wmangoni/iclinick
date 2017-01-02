<?php

namespace App;

use App\Scopes\OwnerScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'description',
        'type',
        'Company',
        'text_memo'
    ];
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new OwnerScope);
    }
}
