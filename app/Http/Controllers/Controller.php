<?php

namespace App\Http\Controllers;
use App\Models\restaurante;
use App\Models\producto;
use App\Models\combo;
use App\Models\rol_pantalla;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function index (){
        $restaurant = array(asset('assets/images/gallery/folio01.png'),
        asset('assets/images/gallery/folio02.png'),
        asset('assets/images/gallery/folio03.png'),
        asset('assets/images/gallery/folio04.png'),
        asset('assets/images/gallery/folio05.png'),
        asset('assets/images/gallery/folio06.png'));
        
        return view ("index",['restaurant'=>$restaurant]);
    }
    public function paginaRestaurante($nombreRestaurante){

        $restaurante = restaurante::where('slug',$nombreRestaurante)->get()->first();

        if($restaurante->estado != 2){
                     
            $images_routes = array(asset('assets/images/banners/banner1.png'),
                                    asset('assets/images/banners/banner1.png'),
                                    asset('assets/images/banners/banner1.png'));
            
            $products = array("Producto 1",
                            "Producto 2",
                            "Producto 3",
                            "Producto 4",
                            "Producto 5",);
            $price = ("34.95");

            $social_media = array("https://www.facebook.com/",
                            "https://twitter.com/",
                            "https://www.instagram.com/");
            
            

            $logo = (asset('assets/images/logo/logo-light.png'));


            return view('paginaRestaurante.main',['restaurante'=>$restaurante,'images_routes'=>$images_routes,"products"=>$products, "price"=>$price, "social_media"=>$social_media, "logo"=>$logo]);
        
        }else{
            return "Pagina en Construccion";
        }
    }

    public static function verificarHorario($tipo,$id){

        

        if($tipo == 0){
            $producto = producto::find($id);
            $horario = $producto->horario->horario_dia(now()->toArray()['dayOfWeek']);
            $hora_actual = now()->format('H:i:s');
            if($hora_actual>$horario->inicio && $hora_actual<$horario->fin){
                

                return true;

            }else{
                return false;
            }
        }else{

            $combo = combo::find($id);
            $horario = $combo->horario->horario_dia(now()->toArray()['dayOfWeek']);
            $hora_actual = now()->format('H:i:s');
            if($hora_actual>$horario->inicio && $hora_actual<$horario->fin){
                

                return true;

            }else{
                return false;
            }



        }

    }

    public static function cantidadNotificaciones(){

        $cantidad = notificacion::whereNull('read_at')
                                    ->where('notifiable_id',Auth::user()->id)
                                    ->count();
        
        return $cantidad;
        
            
        
    }

    public static function permisos($ruta){

        $pantalla_rol = Controller::urlsPantallasXUsuario();
      
       
        $permisos['create']=0;
        $permisos['update']=0;
        $permisos['delete']=0;       
        $permisos['insert']=0;
        
       
        foreach ($pantalla_rol as $pantalla) {
            
            if ('/admin/'.$ruta.'/update'==$pantalla) {
                $permisos['update']=1;
            } 
            if ('/admin/'.$ruta.'/create'==$pantalla) {
                $permisos['create']=1;
            } 
            if ('/admin/'.$ruta.'/delete'==$pantalla) {
                $permisos['delete']=1;
            }            
                      
            
            if ('/admin/'.$ruta.'/insert'==$pantalla) {
                $permisos['insert']=1;
            }
       
            
        }    
        
        
        return $permisos;


        
    }


    public static function urlsPantallasXUsuario(){
        $pantallas_rol = rol_pantalla::where('rol_id',Auth::user()->rol->id)->get();
        $lista = array();

        foreach($pantallas_rol as $pantalla_rol){
            array_push($lista,$pantalla_rol->pantalla->url);
        }       

        
       
        return $lista;

    }

    public static function generaPassword($longitud){
        $characters = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $longitud; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

}  
