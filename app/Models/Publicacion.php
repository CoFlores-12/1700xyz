<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'idUsuario',
        'descripcion'
    ];

    protected $table = 'publicaciones';
    public $timestamps = false;
}
