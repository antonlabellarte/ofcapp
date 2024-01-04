<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'ordini';
    protected $fillable = [
        'data_ordine',
        'codice_cliente',
        'codice_fornitore',
        'referente_per_scarico',
        'indirizzo_scarico',
        'citta_scarico',
        'telefono_responsaible_scarico',
        'ag',
        'quantita',
        'importo',
        'pagamento',
        'sconto',
        'mese_ordine',
        'descrizione',
        'sconto_uno',
        'sconto_due',
        'sconto_tre',
        'oneri_vari',
        'note'
    ];
}
