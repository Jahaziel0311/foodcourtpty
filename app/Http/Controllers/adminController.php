<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\rol_pantalla;

class adminController extends Controller
{
    
    public function index(){

        

        if(Auth::user()){ 

            if(Auth::user()->rol->id == 1){

                return view('admin.index.index');

            }elseif(Auth::user()->rol->id == 2){

                
                if(Auth::user()->restaurante->estado == 2){
                   

                    return redirect(route('admin.restautante.config'));
                }
                

            }else{                
                
                return view('admin.index.index');

            }

        }else {

            return redirect(route('login.index'));
            
        }

    }

}
