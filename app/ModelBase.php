<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelBase extends Model
{
    protected $fillable = [];

    /**
     * @return mixed
     */
    public function getFillable()
    {
        return $this->fillable;
    }
}
