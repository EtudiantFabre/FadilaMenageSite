<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenom','date_naissance','lieu_naissance','genre','nationalite','piece_identite','numero_de_piece','date_delivrer',
    'date_expiration','ville_residence','quartier','rue','email','situation_familiale','enfants_encharge','profession',
    'avatar','poste_candidate','horaire_travail_souhaite','objectif','qualite_personnelles','savoir_faire','disponible_a_loger',
    'nature_contrat','horaire_travail_passe','date_retenu','telephone','pretention_salarial','niveau_etude'];
protected $primaryKey = 'id_agent';

public function contrat()
{
return $this->hasMany(Contrat::class,'id_contrat' );
}

        public function personneAprevenir()
        {
          return $this->hasMany(personneAprevenir::class,'id_personne');
        }

        public function experienceDuCandidat()
        {
          return $this-> hasMany(ExperienceDuCandidat::class,'id_experience');
        }


    public function suivis()
    {
    return $this->hasMany(Suivi::class,'id_suivi');
    }

    public function evaluation()
    {
    return $this->hasMany(Evaluation::class,'id_evaluation');

    }

    public function personne()
    {
    return $this->belongsTo(Personne::class,'id_personne');
    }

    public function agentPonctuels()
    {
    return $this->hasMany(AgentPonctuel::class,'id_agent_ponctuel');
    }
}
