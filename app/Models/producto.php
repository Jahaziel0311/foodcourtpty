<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $table = "producto";

    public function producto_combos()
    {
        return $this->hasMany('App\Models\productoCombo');
    }

    public function carpeta(){

        return $this->belongsTo('App\Models\carpeta');

    }
}
