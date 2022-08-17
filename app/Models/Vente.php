<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vente extends Model
{
    use HasFactory;

    protected $fillable = ['personnel','mois','contrat_permanent','contrat_permanent_perdus','contrat_gagne','solde_contrat','contrat_ponctuel','marche_public',
                          'total_client_findu_mois','commentaire','ca_total_mensuel_realiser '];

    protected $primaryKey = 'id_vente';

/**
 * Get the personnel that owns the Vente
 *
 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
 */
public function personnel()
{
    return $this->belongsTo(Personnel::class, 'id_personnel',);
}
}
