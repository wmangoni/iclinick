<?php

namespace App;

use App\Scopes\OwnerPaymentScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;

    protected $fillable = [
    	'amount',
        'patient_id',
        'obs'
    ];
    protected $table = 'payment';

    public function patient()
    {
        return $this->belongsTo('App\Patient');
    }
    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope(new OwnerPaymentScope);
    }
}
