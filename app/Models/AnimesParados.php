<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimesParados extends Model
{
    use HasFactory;
    
    protected $PrimaryKey = 'id';
    protected $table = 'animes_parados';
    
    protected $attributes = [
        'descricao' => 'vazio',
    ];
    
    public function nome_anime()
    {
        return $this->belongsTo(table_anime::class,'id_anime','id');
    }
   
}
