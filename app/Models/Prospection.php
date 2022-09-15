<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospection extends Model
{
    use HasFactory;
    protected $fillable = ['raison_social', 'date_prospection', 'canal', 'competence_rechercher', 
    'type_maison', 'nbre_de_chambre', 'nbre_wc_douche', 'taille_famille', 'info_complementaire',
    'budget', 'actions_menees', 'aboutissement', 'id_agent', 'id_client'];
    protected $primaryKey = 'id_prospection';


    /**
     * Get the agent that owns the Prospection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'id_agent');
    }

    /**
     * Get the client that owns the Prospection
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function client()
    {
        return $this->belongsTo(Client::class, 'id_client');
    }
    
}
