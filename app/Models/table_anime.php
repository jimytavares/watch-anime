<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_anime extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';
    protected $table = "table_anime";
    
    /*protected $attributes = [
        'image' => 'no-image.png',
    ];*/
    
    protected $casts = [
        'genero' => 'array'
    ];
    
}
