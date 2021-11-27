<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rol extends Model
{
    use HasFactory;
    protected $table = "rol";

    public function usuarios()
    {
        return $this->hasMany('App\Models\user');
    }

    public function rol_pantallas()
    {
        return $this->hasMany('App\Models\rol_pantalla');
    }

    public function menu()
    {
        $rol_id = Auth()->user()->rol->id;
        $pantallas_rol = rol_pantalla::where('rol_id',$rol_id)->get();
        $lista = array();

        foreach($pantallas_rol as $pantalla_rol){
            array_push($lista,$pantalla_rol->pantalla->id);
        }

        return pantalla::where('padre',0)->where('estado',1)->get();
    }
}
