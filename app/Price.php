<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name', 'product_price'
    ];
}
