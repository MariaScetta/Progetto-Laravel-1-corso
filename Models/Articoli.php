<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articoli extends Model
{
    use HasFactory;
    protected $table = 'articoli';
    protected $filltable = ['id', 'titolo', 'sottotitolo', 'autore','testo', 'created_at', 'updated_at'];
    /*public function categoria(){
        return $this->belongsTo('App\Models\Categorie', 'categorie_id', 'id');
    }*/

    

    
}
