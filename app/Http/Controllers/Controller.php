<?php

namespace App\Http\Controllers;
use App\Models\restaurante;
use App\Models\producto;
use App\Models\combo;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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
}  
