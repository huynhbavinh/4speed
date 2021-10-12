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
        'title',
        'category_id',
        'specifications',
        'detail',
        'options',
        'thumbnail',
    ];
    protected $casts = [
        'specifications' => 'array',
        'options' => 'array',
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
