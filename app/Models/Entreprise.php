<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entreprise extends Model
{
    use HasFactory;

    // elle est obligatoire si nous avions redéfini la collone id dans les migrations
    //docn ceci dit cette ligne n'est pas necéssaire
    protected $primaryKey = "id";

    protected $fillable=[
            'user_id',
            'nom',
            'pays',
            'ville',
            'quartier',
            'adresse',
    ];

    protected $guarded =[
        'id'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function evenements(): HasMany
    {
        return $this->hasMany(Evenement::class);
    }
}
