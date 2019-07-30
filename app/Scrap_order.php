<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Scrap_order extends Model
{
    protected $fillable = [
        'fullname', 'address','scarp_detail','expected_date','expected_time','contact_no','email','refernces_email','Status'
    ];
}
