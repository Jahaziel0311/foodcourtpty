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

    public function imagenes_banner()
    {
        return $this->hasMany('App\Models\imagen')->where('tipo_imagen_id',1)->get();
    }
}
