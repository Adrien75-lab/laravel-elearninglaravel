<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Pour récupérer les catégories
    public function category()
    {
        // belongsTo = Appartient à la classe
        return $this->belongsTo('App\Category');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
