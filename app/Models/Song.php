<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $casts = [
        'isWorkedOut' => 'boolean',
    ];

    protected $fillable = [
        'title',
        'author',
        'description',
        'file',
        'isWorkedOut',
    ];

}
