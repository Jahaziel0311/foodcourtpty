<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class loginController extends Controller
{
    //

    public function index(){

        return view('admin.login.login');

    }


    public function login(Request $request){

        $nombre=$request->usuario;
        $contraseña=$request->password;        
        
        $existe=user::where('nombre',$nombre)->count();
        
        if ($existe==1) {
            $usuario=user::where('nombre',$nombre)->first(); 
            
            if ($usuario['password']==md5($contraseña)) {
                
                Auth::login($usuario);

                return redirect(route('admin.index'));
            }
            else {                
                
                return redirect()->back()->withErrors(['danger' => "Contraseña incorrecta."])->withInput($request->all());
            }
        }
        else {            
           
            return redirect()->back()->withErrors(['danger' => "El usuario es incorrecto."])->withInput($request->all());
        }
    }

    public function logout(){
        
        Auth::logout();

        return redirect(route('login.index'));
    }
}
