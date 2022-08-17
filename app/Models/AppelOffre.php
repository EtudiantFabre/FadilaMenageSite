<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppelOffre extends Model
{
    use HasFactory;
    protected $fillable = ['classement', 'adresse_autorite_contractante', 'date_depot', 'domaine_postule', 'prix_achat_dossier', 'caution_bancaire', 'resultat', 'debut_prestation', 'id_societe', 'id_personnel'];
    protected $primaryKey = 'id_appel';


    /**
     * Get the societe that owns the AppelOffre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function societe(): BelongsTo
    {
        return $this->belongsTo(Societe::class, 'id_societe');
    }


    /**
     * Get the personnel that owns the AppelOffre
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personnel(): BelongsTo
    {
        return $this->belongsTo(Personnel::class, 'id_personnel');
    }
}
