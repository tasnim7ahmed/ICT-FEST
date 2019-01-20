<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MathOlympiad extends Model
{
    protected $fillable = [
        'name', 'id', 'category', 'contact', 'institution', 'total','paid','email',
    ];
}
