<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;
   
    protected $fillable=['title','description','image_path','rating_star','user_id'];

    // public function user(){
    //     return $this->belongsTo(User::class);
    
    // }
    
    
}



