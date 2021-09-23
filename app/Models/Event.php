<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $casts = [
        'isPassed' => 'boolean',
    ];

    protected $fillable = [
        'title',
        'date',
        'description',
        'isPassed',
    ];
}
