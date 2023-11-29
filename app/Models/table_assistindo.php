<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table_assistindo extends Model
{
    use HasFactory;
    protected $table = "table_assistindo";
    protected $guarded = [];
    
    public function nome_anime()
    {
        return $this->belongsTo(table_anime::class,'id_anime','id');
    }
    
}
