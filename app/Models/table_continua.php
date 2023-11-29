<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_continua extends Model
{
    use HasFactory;
    protected $table = "table_continua";
    
    public function nome_anime()
    {
        return $this->belongsTo(table_anime::class,'id_anime','id');
    }
    
}
