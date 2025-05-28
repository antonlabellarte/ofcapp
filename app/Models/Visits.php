<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visits extends Model
{
    use HasFactory;

    protected $table = 'visite';
    protected $fillable = [
        'id',
        'agente',
        'numero_visita',
        'cliente',
        'ultima_visita',
        'note',
        'attivita',
        'aggiornamenti'
    ];
}
