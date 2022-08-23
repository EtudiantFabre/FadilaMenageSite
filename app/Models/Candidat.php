<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;
    protected $fillable =['nom','prenom','date_naissance','lieu_naissance','genre','nationalite','piece_identite','numero_de_piece','date_delivrer',
                          'date_expiration','ville_residence','quartier','rue','email','situation_familiale','enfants_encharge','profession','photo_id',
                          'avatar', 'poste_candidate','horaire_travail_souhaite','objectif','qualite_personnelles','savoir_faire','disponible_a_loger',
                          'nature_contrat','oraire_travail_passe'];
    protected $primaryKey = 'id_candidat';


    public function personneAprevenir()
    {
        return $this->hasMany(personneAprevenir::class,'id_personne');
    }

    public function experienceDuCandidat()
    {
        return $this-> hasMany(ExperienceDuCandidat::class,'id_experience');
    }

    /**
     * Get the personne that owns the Candidat
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personne()
    {
        return $this->belongsTo(User::class, 'id_personne');
    }
}
