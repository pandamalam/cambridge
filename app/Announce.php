<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announce extends Model
{
    protected $fillable = [
        'title', 'post', 'image','status','forr'
    ];
}
