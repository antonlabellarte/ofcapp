<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuppliersPositions extends Model
{
    use HasFactory;

    protected $table = 'altre_posizioni_fornitori';
    protected $fillable = [
        'id',
        'id_fornitore',
        'altra_posizione',
        'telefono',
        'mail'
    ];
}
