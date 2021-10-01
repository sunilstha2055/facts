<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable=[
        'title1',
        'title2',
        'description',
        'btn1',
        'btn1_link',
        'btn2',
        'btn2_link',
        'image',
    ];
}