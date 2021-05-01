<?php

namespace App\Models\basile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pret extends Model
{
    use HasFactory;

    protected $fillable = ['livre_id','client_id','date_pret','date_restitue','nbre_exple'];
}
