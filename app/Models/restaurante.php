<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class restaurante extends Model
{
    use HasFactory;
    protected $table = "restaurante";

    public function categoria()
    {
        return $this->hasMany('App\Models\categoria')->orderBy('orden');
    }

    public function combos()
    {
        return $this->hasMany('App\Models\combo');
    }

    public function carpeta(){

        return $this->belongsTo('App\Models\carpeta');

    }

    public function users()
    {
        return $this->hasMany('App\Models\user');
    }

    public function dueño()
    {
        return $this->hasMany('App\Models\user')->where('rol_id',2)->get()->first();
    }


}
