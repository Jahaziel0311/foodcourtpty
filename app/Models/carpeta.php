<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carpeta extends Model
{
    use HasFactory;
    protected $table = "carpeta";

    public function imagenes()
    {
        return $this->hasMany('App\Models\imagen');
    }

    public function imagenes_por_tipo_imagen($id)
    {
        return $this->hasMany('App\Models\imagen')->where('tipo_imagen_id',$id)->get();
    }

    public function imagen_principal()
    {
        return $this->hasMany('App\Models\imagen')->where('tipo_imagen_id',10)->get()->first();
    }

    public function logo_dark()
    {
        return $this->hasMany('App\Models\imagen')->where('tipo_imagen_id',3)->get()->first();
    }

    public function logo_ligth()
    {
        return $this->hasMany('App\Models\imagen')->where('tipo_imagen_id',4)->get()->first();
    }

    public function icono()
    {
        return $this->hasMany('App\Models\imagen')->where('tipo_imagen_id',9)->get()->first();
    }
}
