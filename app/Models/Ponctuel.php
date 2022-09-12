<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ponctuel extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'nom', 'prenom', 'adresse',
        'forfait', 'montant_ttc'];
    protected $primaryKey = 'id_ponctuel';

    protected $casts = ['adresse' => 'array'];

    public function agentPonctuels()
    {
    return $this->hasMany(AgentPonctuel::class,'id_agent_ponctuel');
    }
}
