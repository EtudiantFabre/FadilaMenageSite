<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppelOffre extends Model
{
    use HasFactory;
    protected $fillable = ['date_invitation', 'autorite_contractante', 'numero_aao', 'montant_propose',
    'nbre_concurents', 'classement', 'adresse_autorite_contractante', 'date_depot', 
    'domaine_postule', 'prix_achat_dossier', 'caution_bancaire', 'resultat', 
    'debut_prestation', 'id_societe', 'id_personnel'];
    protected $primaryKey = 'id_appel';

    protected $casts = ['adresse_autorite_contractante' => "array"];


    /**
     * Get the societe that owns the AppelOffre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function societe()
    {
        return $this->belongsTo(Societe::class, 'id_societe');
    }


    /**
     * Get the personnel that owns the AppelOffre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personnel()
    {
        return $this->belongsTo(Personnel::class, 'id_personnel');
    }
}
