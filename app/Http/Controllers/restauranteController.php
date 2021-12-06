<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\restaurante;
use App\Models\carpeta;
use App\Models\user;


class restauranteController extends Controller
{
    public function index(){

        if(Auth::user()){ 

            $pantallas_menu = Controller::urlsPantallasXUsuario();

            if (in_array('/admin/restaurante/create',$pantallas_menu)){

                $restaurantes = restaurante::get();
                $permisos = Controller::permisos('restaurante');
                
                return view('admin.restaurante.index',['resultado'=>$restaurantes,"permisos"=>$permisos]);

            }
            
            return redirect(route('admin.index'));

        }else {

            return redirect(route('login.index'));
            
        }

    }


    public function insert(Request $request){

        if(Auth::user()){ 

            $pantallas_menu = Controller::urlsPantallasXUsuario();

            if (in_array('/admin/restaurante/create',$pantallas_menu)){

                $slug = str_replace(' ','_',$request->txtNombre);
                
                $password = Controller::generaPassword(10);
                
                try {

                    $obj_restaurante = new restaurante();
                    $obj_restaurante->nombre = $request->txtNombre;
                    $obj_restaurante->slug = $slug; 
    
                    $obj_carpeta = new carpeta();
                    $obj_carpeta->descripcion = 'Carpeta Restaurante '.$request->txtNombre;
                    $obj_carpeta->save();
                    $obj_restaurante->carpeta_id = $obj_carpeta->id;
                    $obj_restaurante->save();
                    
                    $obj_user = new user();
                    $obj_user->nombre = $request->txtNombreDueño;
                    $obj_user->email = $request->txtEmail;
                    $obj_user->telefono = $request->txtTelefono;
                    $obj_user->password = md5($password);
                    $obj_user->rol_id = "2";
                    $obj_user->restaurante_id = $obj_restaurante->id;
                    $obj_user->save();

                    
                    return redirect()->back()->withErrors(['success' => "Se creo el restaurante correctamente; Ingrese con el Usuario: ".$obj_user->nombre." y la contraseña: ".$password]);
        
                } catch (\Illuminate\Database\QueryException $qe) {

                    return $qe->getMessage();
                    return redirect()->back()->withErrors(['danger' => $qe->getMessage()]);

                }
                

            }            
              
            return redirect(route('admin.index'));

        }else {

            return redirect(route('login.index'));
            
        }
    }

    public function config(){

        if(Auth::user()){ 

            $pantallas_menu = Controller::urlsPantallasXUsuario();

            if (in_array('/admin/restaurante/create',$pantallas_menu)){

                $restaurante = Auth::user()->restaurante;

                return view('admin.restaurante.config',['restaurante'=>$restaurante]);

            }else {

                return redirect(route('login.index'));
                
            }
                 
              
            return redirect(route('admin.index'));

        }else {

            return redirect(route('login.index'));
            
        }

    }

    public function configSave(Request $request){

        if(Auth::user()){ 

            $pantallas_menu = Controller::urlsPantallasXUsuario();

            if (in_array('/admin/restaurante/create',$pantallas_menu)){

                $restaurante = restaurante::find(Auth::user()->restaurante->id);

                $restaurante->nombre            = $request->txtNombre;
                $restaurante->saludo            = $request->txtSaludo;
                $restaurante->texto_principal   = $request->txtTextoPrincipal;
                $restaurante->slogan            = $request->txtSlogan;
                $restaurante->facebook_url      = $request->txtFacebook;
                $restaurante->instagram_url     = $request->txtInstagram;
                $restaurante->whatsapp_url      = $request->txtWhatsapp;
                $restaurante->twitter_url       = $request->txtTwitter;
                $restaurante->descripcion       = $request->txtDescripcion;
                $restaurante->save();

                return redirect(route('admin.restautante.config2'))->withErrors(['success' => "Los datos se guardaron correctamente"]);
            }            
              
            return redirect(route('admin.index'));

        }else {

            return redirect(route('login.index'));
            
        }

    }

    public function config2(){

        if(Auth::user()){ 

            $pantallas_menu = Controller::urlsPantallasXUsuario();

            if (in_array('/admin/restaurante/create',$pantallas_menu)){


                $restaurante = Auth::user()->restaurante;

                return view('admin.restaurante.config2',['restaurante'=>$restaurante]);

            }else {

                return redirect(route('login.index'));
                
            }
                   
              
            return redirect(route('admin.index'));

        }else {

            return redirect(route('login.index'));
            
        }

    }

    public function configSave2(Request $request){

        if(Auth::user()){ 

            $pantallas_menu = Controller::urlsPantallasXUsuario();

            if (in_array('/admin/restaurante/create',$pantallas_menu)){

                return $request;

            }else {

                return redirect(route('login.index'));
                
            }
                  
              
            return redirect(route('admin.index'));

        }else {

            return redirect(route('login.index'));
            
        }

    }

}
