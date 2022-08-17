<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    use HasFactory;

    protected $fillable = ['sigle', 'description', 'date_offre', 'domaine'];
    protected $primaryKey = 'id_societe';
}
