<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    public $fillable = ['body', 'completed'];
    
    protected $casts = [
        'completed' => 'boolean',
    ];
}
