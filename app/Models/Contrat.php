<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    use HasFactory;
    protected $fillable = ['agent','client','date_contrat','debut_contrat','echeance_contrat','service','local',
                           'adresse','temps','frequence','facturation','salaire','tva','marge_nette','status'];

    protected $primaryKey = 'id_contrat';

public function relenceContrat()
{
return $this->hasMany(RelanceContrat::class,'id_relance');
}

public function agent()
{
return $this->belongsTo(Agent::class,'id_agent');
}

public function client()
{
return $this->belongsTo(Client::class,'id_client');
}
}
