<?php

namespace App\SpecificationByDB;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Customer extends Eloquent
{
    protected $fillable = ['name', 'type'];

    /**
     * @return mixed
     */
    public function type()
    {
        return $this->type;
    }
}