<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    
    //
    protected $fillable = [
        'Title',
        'invoices_number',
    ];
}
