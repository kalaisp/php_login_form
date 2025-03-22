<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class emp extends Model
{
    //
    protected $fillable = [
        'emp_name',
        'phone',
        'address',
        'gender',
        'email',
        'state',
        'salary',
        'hobbies',
    ];
}
