<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materiais extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'imagem','download',
    ];

    protected $primaryKey = 'id';
    protected $table = 'materiais';
}
