<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\restaurante;

class restauranteController extends Controller
{
    public function index(){

        if(Auth::user()){ 

            $restaurantes = restaurante::get();

            return view('admin.restaurante.index',['resultado'=>$restaurantes]);

        }else {

            return redirect(route('login.index'));
            
        }

    }
}
