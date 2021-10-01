<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=[
        'name',
        'f_username',
        'l_username',
        't_username',
        'i_username',
        'designation',
        'image',
    ];
}