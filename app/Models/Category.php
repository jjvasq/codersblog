<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Realción uno a muchos inversa
    public function posts(){
        return $this->hasMany(Post::class);
    }
}
