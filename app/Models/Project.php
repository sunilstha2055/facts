<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable=[
        'title',
        'Worktitle',
        'description',
        'image',
    ];

    public function latestwork()
    {
        return $this->belongsTo(Latestwork::class);
    }
}