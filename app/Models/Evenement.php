<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Evenement extends Model
{
    use HasFactory;


    protected $fillable = [
        'entreprise_id',
        'nom',
        'pays',
        'ville',
        'adresse',
        'gps',
        'description',
        'date_event',
        'heur_debut',
        'heur_fin'
    ];

    //pour les champ que nous n'aimerions pas voire (remplir) lors de la création de l'instance de ce model
    protected $guarded =[
        'id'
    ];


    public function entreprise(): BelongsTo
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    public function template(): BelongsTo
    {
        return $this->belongsTo(Template::class);
    }

}



