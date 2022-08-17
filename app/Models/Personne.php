<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','date_naissance','lieu_naissance','genre','nationalite','piece_identite','numero_de_piece','date_delivrer',
    'date_expiration','ville_residence','quartier','rue','email','situation_familiale','enfants_encharge','profession','photo_id'];

    protected $primaryKey = 'id_personne';

    
}
