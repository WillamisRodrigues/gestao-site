<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $fillable = [
        'miniatura', 'titulo', 'descricao','destino'
    ];

    protected $primaryKey = 'id';
    protected $table = 'noticias';
}
