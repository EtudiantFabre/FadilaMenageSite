<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospection extends Model
{
    use HasFactory;
    protected $fillable = ['raison_social', 'date', 'canal', 'competence_rechercher', 'type_maison', 'nbre_de_chambre', 'nbre_wc_douche', 'taille_famille', 'info_complementaire', 'budget', 'actions_menees', 'conclusion', 'id_agent', 'id_client', 'id_facture'];
    protected $primaryKey = 'id_prospection';


    /**
     * Get the agent that owns the Prospection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent(): BelongsTo
    {
        return $this->belongsTo(Agent::class, 'id_agent');
    }

    /**
     * Get the client that owns the Prospection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'id_client');
    }

    
    /**
     * Get the facture associated with the Prospection
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function facture(): HasOne
    {
        return $this->hasOne(Facture::class, 'id_facture');
    }
}
