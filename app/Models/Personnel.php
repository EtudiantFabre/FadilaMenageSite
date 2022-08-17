<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnel extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','date_naissance','lieu_naissance','genre','nationalite','piece_identite','numero_de_piece', 'date_delivrer',
    'date_expiration','ville_residence','quartier','rue','email','situation_familiale','enfants_encharge',
    'profession','photo_id','avatar','salaire','post_ocuper','nature_contrat',];

protected $primaryKey = 'id_personnel';

public function vente(){
return $this->hasMany(Vente::class,'id_vente');
}

public function suivit(){
return $this->hasMany(Suivit::class,'id_suivi');
}

public function appelOffre(){
return $this->hasMany(AppelOffre::class,'id_appelOffre');
}


public function facture(){
return $this->hasMany(Facture::class,'id_facture');
}

/**
* Get the personne that owns the Personnel
*
* @return \Illuminate\Database\Eloquent\Relations\BelongsTo
*/
public function personne()
{
return $this->belongsTo(Personne::class, 'id_personne');
}
}
