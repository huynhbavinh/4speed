<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MotoCycles;
use App\Models\User;


class comment extends Model
{
    use HasFactory;
    protected $fillable=['content','product_id','user_id'];
    
    public function product(){
        return $this->belongsTo(MotoCycles::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
