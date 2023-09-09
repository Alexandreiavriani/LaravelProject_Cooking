<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Italy extends Model
{
    use HasFactory;
    protected $fillable=['title','description','image_path','rating_star','user_id'];
}
