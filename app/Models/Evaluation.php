<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    use HasFactory;
    protected $fillable = ['periodicite', 'debut_periode', 'fin_periode', 'note_sur_vingt', 'commentaire', 'sugestion', 'id_agent'];
    protected $primaryKey = 'id_evaluation';

    /**
     * Get the agent that owns the AgentPonctuel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function agent()
    {
        return $this->belongsTo(Agent::class, 'id_agent');
    }
}
