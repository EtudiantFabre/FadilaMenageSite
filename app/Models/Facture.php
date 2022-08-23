<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $fillable = ['remuneration_brut', 'remuneration_net', 'conciliation_social', 'provision_sociales', 'cotisation_provisoir_conges', 'total_debour', 'frais', 'tva', 'total_ttc'];
    protected $primaryKey = 'id_facture';

    /**
     * Get the personnel that owns the Facture
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personnel()
    {
        return $this->belongsTo(Personnel::class, 'id_personnel');
    }

    /**
     * Get the prospection that owns the Facture
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function prospection()
    {
        return $this->belongsTo(Prospection::class, 'id_prospection');
    }
}
