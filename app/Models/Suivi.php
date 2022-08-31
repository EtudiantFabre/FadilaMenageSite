<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suivi extends Model
{
    use HasFactory;

    protected $fillable = ['date_passage', 'heure_passage', 'acces_residence', 'verif_presence_agent', 'presence_agent', 'heure_arrive_agent', 'pres_corporel_vestimentaire', 'entretient_plafond', 'essuyage_vitre', 'depousierage_appareil', 'depousierage_meuble', 'entretient_corbeil', 'entretient_sanitaire', 'balayage_netoyage_sol', 'repassage', 'autres_traveaux', 'id_personnel', 'id_agent'];
    protected $primaryKey = 'id_suivis';

    /**
     * Get the personnel associated with the Suivi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function personnel()
    {
        return $this->belongsTo(Personnel::class, 'id_personnel');
    }

    /**
     * Get the agent associated with the Suivi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'id_agent');
    }

    /*public function clients(){
        return $this->hasMany(Client::class, 'id_client');
    }*/

}
