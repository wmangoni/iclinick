<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
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
}
