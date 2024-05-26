<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;


    protected $fillable = ['nom','tel','ville','quartier','email','type_service_rechercher','frequence_souhaiter'];
    protected $primaryKey = 'id_client';

    public function contrat()
    {
        return $this->hasMany(Contrat::class,'id_contrat');
    }

    /*public function prospections()
    {
        return $this->hasMany(Prospection::class,'id_prospection');
    }*/
}
