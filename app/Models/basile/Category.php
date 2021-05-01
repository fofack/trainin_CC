<?php

namespace App\Models\basile;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['nom','description'];

    public function livres()
    {
        return $this->belongsTo(Livre::class);
    }
}
