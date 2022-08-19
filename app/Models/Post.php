<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    //Relación uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación con categorías.
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relación muchos a muchos.
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relación uno a uno polimórfica
    /**
     * Tener en cuenta que los parámetros se relacionan con la tabla
     * polimórfica en este caso Image.php (Modelo quise decir)
     */
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
