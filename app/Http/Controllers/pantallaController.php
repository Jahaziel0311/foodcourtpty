<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\pantalla;


class pantallaController extends Controller
{
    public function index(){

        if(Auth::user()){ 

            $pantallas = pantalla::where("estado", 1)->get();
            $padre = pantalla::where("padre", 0)->get();
            $permisos = Controller::permisos('pantalla');
            
            return view('admin.pantalla.index',['pantallas'=>$pantallas,"permisos"=>$permisos,"padre"=>$padre]);

        }else {

            return redirect(route('login.index'));
            
        }

    }
    public function create(){

        if(Auth::user()){ 

            $pantallas = pantalla::where("padre", 0)->get();
            $permisos = Controller::permisos('pantalla');
            
            return view('admin.pantalla.create',['pantallas'=>$pantallas,"permisos"=>$permisos]);

        }else {

            return redirect(route('login.index'));
            
        }
    }

    public function insert(Request $request){

        if(Auth::user()){ ;
            $pantallas = Controller::urlsPantallasXUsuario();
            // return back()->withInput()->withErrors(['danger' => $pantallas ]); 
            
            
            
            if (in_array('/admin/pantallas',$pantallas)){//solo modificar la ruta buscar las rutas en web.php o el la tabla pantallas
                //esto ya estaba


                
                $slug = str_replace(" ","",$request->txtNombrePantalla);
                $existe = pantalla::where('slug',$slug)->count();    
                if($existe == 1){
                    return back()->withInput()->withErrors(['danger' => "Esta pantalla ya existe" ]); 
                }else{
                    $obj_pantalla = new pantalla();
                    $obj_pantalla->nombre =$request->txtNombrePantalla;
                    $obj_pantalla->slug = ($slug);
                    $obj_pantalla->url = ($request->txtUrl);
                    $obj_pantalla->request = $request->txtRequest;
                    $obj_pantalla->padre = $request->txtPadre;
                    $obj_pantalla->estado = $request->txtEstado;
                    $obj_pantalla->save();
                    return back()->withInput()->withErrors(['statusPantalla' => "Pantalla creada con exito" ]); 
                    return back()->withInput()->withErrors(['status' => "Pantalla creada con exito" ]); 

                }
            }else{
                return back()->withInput()->withErrors(['dangerPantalla' => "Otro Error" ]); 
                return back()->withInput()->withErrors(['danger' => "Otro Error" ]); 

            }
            


        }else {

            return redirect(route('login.index'));
            
        }


    }
    public function delete($id){

        if(Auth::user()){ 
            $pantallas = Controller::urlsPantallasXUsuario();
            if (in_array('/admin/pantallas',$pantallas)){//solo modificar la ruta buscar las rutas en web.php o el la tabla pantallas
                //esto ya estaba
                $obj_pantalla = pantalla::find($id);
                $obj_pantalla->estado = 0;
                $obj_pantalla->save();
                // return view('admin.pantalla.create',['pantallas'=>$pantallas,"permisos"=>$permisos]);
                return back()->withInput()->withErrors(['status' => "Pantalla eliminada con exito" ]);
            }else{
                return back()->withInput()->withErrors(['danger' => "No se pudo eliminar la pantalla" ]); 
            }

        }else {

            return redirect(route('login.index'));
            
        }
        

    }

    public function update(Request $request){
        if(Auth::user()){ 
                $pantallas = Controller::urlsPantallasXUsuario();
                if (in_array('/admin/pantallas',$pantallas)){//solo modificar la ruta buscar las rutas en web.php o el la tabla pantallas
                    //esto ya estaba
                
                $slug = str_replace(" ","",$request->txtNombrePantalla);
                // $existe = pantalla::where('slug',$slug)->count();   

                $obj_pantalla = pantalla::find($request->txtId);

                // return $obj_pantalla;
                if($obj_pantalla->slug == $slug){
                    
                    $obj_pantalla->nombre =$request->txtNombrePantalla;
                    $obj_pantalla->slug = ($slug);
                    $obj_pantalla->url = ($request->txtUrl);
                    $obj_pantalla->request = $request->txtRequest;
                    $obj_pantalla->padre = $request->txtPadre;
                    $obj_pantalla->estado = $request->txtEstado;
                    $obj_pantalla->save();
                    return back()->withInput()->withErrors(['statusPantalla' => "Se ha actualizado la pantalla " ]);
                
                    
                }else{

                    $existe = pantalla::where('slug',$slug)->count(); 

                    if($existe == 1){
                        return back()->withInput()->withErrors(['dangerPantalla' => "Este nombre está asignado a una pantalla" ]);
                    }else{           

                        $obj_pantalla->nombre =$request->txtNombrePantalla;
                        $obj_pantalla->slug = ($slug);
                        $obj_pantalla->url = ($request->txtUrl);
                        $obj_pantalla->request = $request->txtRequest;
                        $obj_pantalla->padre = $request->txtPadre;
                        $obj_pantalla->estado = $request->txtEstado;
                        $obj_pantalla->save();
                        return back()->withInput()->withErrors(['statusPantalla' => "Se ha actualizado el medico " ]);
                    }
                    return back()->withInput()->withErrors(['dangerPantalla' => "  NO Se ha actualizado el medico " ]);

                } 
            }
            
              
            
        }else {

            return redirect(route('login.index'));
            
        }
    }
    
}
