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
        return $this->hasMany('App\Models\categoria');
    }
}
