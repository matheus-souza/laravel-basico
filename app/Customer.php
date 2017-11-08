<?php

namespace Odin;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = ['name', 'birthdate', 'special_customer', 'city', 'state'];

    protected $casts = [
        'special_customer' => 'boolean',
        'birthdate' => 'date',
    ];

}
