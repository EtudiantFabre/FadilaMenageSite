<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;

    protected $fillable = ['nom','prenom','date_naissance','lieu_naissance','genre','nationalite','piece_identite','numero_de_piece','date_delivrer',
                        'date_expiration','ville_residence','quartier','rue','email','situation_familiale','enfants_encharge','profession','photo_id','avatar','date_retenu','status'];
protected $primaryKey = 'id_agent';

public function contrat()
{ 
return $this->hasMany(Contrat::class,'id_contrat' );
}

public function suivit()
{
return $this->hasMany(Suivit::class,'id_suivi');
}

public function evaluation()
{
return $this->hasMany(Evaluation::class,'id_evaluation');
}

public function personne()
{
return $this->belongsTo(Personne::class,'id_personne');
}

}
