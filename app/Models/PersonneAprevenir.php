<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonneAprevenir extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom', 'tel', 
        'quartier', 'profession', 'lien_de_parente', 
        'id_candidat'
    ];
    protected $primaryKey = 'id_personne_a_prevenir';

    /**
     * Get the candidat that owns the AppelOffre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function candidat()
    {
        return $this->belongsTo(Candidat::class, 'id_candidat');
    }
}
