<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = [
        'titulo', 'url', 'status',
    ];

    protected $primaryKey = 'id';
    protected $table = 'banners';
}
