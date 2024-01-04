<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'fornitori';
    protected $fillable = [
        'codice_fornitore',
        'ditta',
        'direzione',
        'cellulare',
        'direzione_mail',
        'commerciale',
        'email_commerciale',
        'amministrazione',
        'email_amministrazione',
        'altre_posizioni',
        'altre_email',
        'telefono',
        'fax',
        'indirizzo',
        'citta',
        'pr',
        'iban',
        'ag',
        'pec',
        'sdi',
        'partita_iva',
        'pagamenti',
        'cap',
        'note'        
    ];
}
