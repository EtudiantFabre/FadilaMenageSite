<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AgentPonctuel extends Model
{
    use HasFactory;
    protected $fillable = ['id_agent', 'id_ponctuel', 'id_agent_ponctuel'];
    protected $primaryKey = ['id_agent', 'id_ponctuel'];

    /**
     * Get the agent that owns the AgentPonctuel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'id_agent');
    }

    /**
     * Get the ponctuel that owns the AgentPonctuel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ponctuel()
    {
        return $this->belongsTo(Ponctuel::class, 'id_ponctuel');
    }
    

}
