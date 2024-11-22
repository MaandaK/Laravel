<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    protected $fillable = [
        'transaction_number',
        'product_name',
        'product_price',
    ];
}
