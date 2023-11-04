<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torre extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'hora',
        'biocida',
        'si_es_mayor',
        'ph',
        'valvula',
        'user_id',
    ];
}
