<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersCollaborators extends Model
{
    use HasFactory;

    protected $table = 'collaboratori_clienti';
    protected $fillable = [
        'id',
        'idcliente',
        'responsabile_o_luogo',
        'cellulare',
        'mail',
        'note',
        'ruolo'
    ];
}
