<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class adminController extends Controller
{
    
    public function index(){

        if(Auth::user()){ 

            if(Auth::user()->rol->id == 1){

                return view('admin.index.index');

            }else{

                return view('admin.index.index');

            }

        }else {

            return redirect(route('login.index'));
            
        }

    }

}
