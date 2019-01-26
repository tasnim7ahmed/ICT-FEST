<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IctOlympiad extends Model
{
    protected $fillable = [
        'name', 'id', 'category', 'contact', 'institution', 'total','paid','email','selected','tshirt',
    ];
}
