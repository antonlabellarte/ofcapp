<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Orders extends Model
{
    use HasFactory;

    protected $table = 'ordini';
    protected $fillable = [
        'id',
        'id_cliente',
        'id_fornitore',
        'agente',
        'descrizione',
        'codice_ordine',
        'pagamento',
        'oneri_vari',
        'codice_articolo',
        'importo_cadauno',
        'quantita',
        'sconto',
        'importo_totale',
        'note'
    ];
    
}
