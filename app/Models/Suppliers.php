<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    use HasFactory;

    protected $table = 'fornitori';
    protected $fillable = [
        'id',
        'ditta',
        'ragione_sociale',
        'indirizzo',
        'citta',
        'provincia',
        'cap',
        'telefono',
        'fax',
        'pec',
        'direzione',
        'telefono_direzione',
        'mail_direzione',
        'commerciale',
        'telefono_commerciale',
        'mail_commerciale',
        'amministrazione',
        'telefono_amministrazione',
        'mail_amministrazione',
        'agente',
        'sdi',
        'iban',
        'partita_iva',
        'costi_di_trasporto',
        'condizioni_di_vendita',
        'minimo_dordine',
        'pagamenti',
        'note'
    ];
    
}
