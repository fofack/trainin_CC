<?php

namespace App\Models\basile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['nom','telephone','email','nbre_exple'];

    public function livres()
    {
        return $this->belongsToMany(Livre::class);
    }
}
