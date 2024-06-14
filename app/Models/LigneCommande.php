<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LigneCommande extends Model
{
    use HasFactory;

    protected $fillable = [
        'commande_id',
        'ticket_id',
        'quantite',
    ];

    //pour les champ que nous n'aimerions pas voire (remplir) lors de la création de l'instance de ce model
    protected $guarded =[
        'id'
    ];


    public function commande(): BelongsTo
    {
        return $this->belongsTo(Commande::class);
    }


    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }
}
