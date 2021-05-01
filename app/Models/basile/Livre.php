<?php

namespace App\Models\basile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livre extends Model
{
    use HasFactory;

    protected $fillable = ['nom','nom_auteur','numero_isbn','date_edition',
            'description','nombre_exple','etat','image','category_id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function clients()
    {
        return $this->belongsToMany(Client::class);
    }
}
