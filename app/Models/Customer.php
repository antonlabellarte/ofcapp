<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'clienti';
    protected $fillable = [
        'nome_cliente',
        'partita_iva',
        'codice_fiscale',
        'telefono',
        'fax',
        'cellulare',
        'citta',
        'indirizzo',
        'indirizzo_email',
        'cap',
        'pr',
        'iban',
        'chiusura',
        'pec',
        'sito_web',
        'ag',
        'zona',
        'categoria_cliente',
        'sdi',
        'ragione_sociale',
        'codice_cliente',
        'responsabile',
        'note'
    ];
}
