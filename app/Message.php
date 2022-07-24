<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Message extends Model
{
    protected $fillable = [
        'thread_id',
        'sender_id',
        'content',
        'replies_on',
        'status',
        'read_at',
        'read_by'
    ];

    protected $casts = [
        'read_by'=>'Array',
    ];


}
