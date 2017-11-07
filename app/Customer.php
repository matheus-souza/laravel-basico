<?php

namespace Odin;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $casts = [
        'special_customer' => 'boolean',
        'birthdate' => 'date',
    ];

}
