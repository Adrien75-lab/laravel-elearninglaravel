<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Récupère les courses en fonction de la catégorie
    public function courses(){
            // hasMany = A plusieurs
        return $this->hasMany('App\Course');
    }
}
