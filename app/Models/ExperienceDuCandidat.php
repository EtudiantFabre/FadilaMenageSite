<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExperienceDuCandidat extends Model
{
    use HasFactory;
    protected $fillable = ['nbr_annee_experience','nbr_voiture_conduit','type_voiture','type_contrat','adresse_societe',
                        'adresse_employeur','dernier_salaire','date_demission','pretention_salarial','candidat'];

    protected $primaryKey = 'id_experience';


    public function candidat(){
        return $this->belongsTo(Candidat::class,'id_candidat');
    }
}
