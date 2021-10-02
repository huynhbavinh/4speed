<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MotoCycles;

class Category extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
    ];
    public function motos(){
        return $this->belongsToMany(MotoCycles::class);
    }
}
