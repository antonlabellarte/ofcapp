<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomersNumbers extends Model
{
    use HasFactory;

    protected $table = 'telefono_clienti';
    protected $fillable = [
        'id',
        'idcliente',
        'telefono',
        'note'
    ];
}
