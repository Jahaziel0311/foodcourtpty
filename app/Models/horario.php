<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horario extends Model
{
    use HasFactory;

    protected $table = "horario";

    public function horario_dia($id)
    {
        return $this->hasMany('App\Models\dia')->where('dia',$id)->get()->first();
    }
}
