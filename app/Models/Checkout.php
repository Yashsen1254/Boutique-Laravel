<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $table = 'checkout';
    protected $fillable = [
        'Name', 'Mobile', 'Email', 'Address', 'Cartid',
    ];
}
