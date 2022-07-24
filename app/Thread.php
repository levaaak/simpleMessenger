<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = [
        'members',
        'name'
    ];

    protected $casts = [
        'members' => 'Array'
    ];
}
