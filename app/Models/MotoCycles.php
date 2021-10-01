<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MotoCycles extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'specifications',
        'detail',
        'options',
        'path',
    ];
    protected $casts = [
        'specifications' => 'array',
        'options' => 'array',
        'path' => 'array',
    ];
}
