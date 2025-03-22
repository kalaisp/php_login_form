<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    //
    protected $fillable = [
        'name',
        'dateofbirth',
        'mobileno',
        'address',
    ];
}
