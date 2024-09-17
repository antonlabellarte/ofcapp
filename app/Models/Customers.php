<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    use HasFactory;

    protected $table = 'clienti';
    protected $fillable = [
        'id',
        'cliente',
        'ragione_sociale',
        'codice_fiscale',
        'indirizzo',
        'citta',
        'provincia',
        'cap',
        'regione',
        'fax',
        'sito',
        'chiusura',
        'categoria',
        'pec',
        'agente',
        'sdi',
        'iban',
        'partita_iva',
        'responsabile_scarico',
        'citta_scarico',
        'telefono_responsabile_scarico',
        'note',
        'tipo'
    ];
    
}
