<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_id',
        'template_id',
        'libelle',
        'prix',
        'nombre_place',
        'type',
    ];

    //pour les champ que nous n'aimerions pas voire (remplir) lors de la création de l'instance de ce model
    protected $guarded =[
        'id'
    ];


    public function evenement(): BelongsTo
    {
        return $this->belongsTo(Evenement::class);
    }

    public function template(): BelongsTo
    {
        return $this->belongsTo(Template::class);
    }

    public function lignecommandes(): HasMany
    {
        return $this->hasMany(LigneCommande::class);
    }

}
