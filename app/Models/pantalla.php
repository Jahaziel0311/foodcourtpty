<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pantalla extends Model
{
    use HasFactory;
    protected $table = "pantalla";


    public function sub_menu()
    {
        $rol_id = Auth()->user()->rol->id;
        $pantallas_rol = rol_pantalla::where('rol_id',$rol_id)->get();
        $lista = array();

        foreach($pantallas_rol as $pantalla_rol){
            array_push($lista,$pantalla_rol->pantalla->id);
        }

        return pantalla::where('padre',$this->id)->whereIn('id',$lista)->where('estado',1)->get();
    }
}
