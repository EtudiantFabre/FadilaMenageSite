<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelanceContrat extends Model
{
    use HasFactory;
    protected $fillable = ['contrat','date_relance','client','motif','situation','nbr_contrat_encours'];

    protected $primaryKey = 'id_relance';

    public function contrat()
    {
        return $this->belongsTo(Contrat::class,'id_contrat');

    }

}
