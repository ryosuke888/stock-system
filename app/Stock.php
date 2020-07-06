<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable = [
        'product_name',
        'counts',
        'created_at', 
        'updated_at'
    ];
}
