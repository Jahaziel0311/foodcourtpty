<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function paginaRestaurante($nombreRestaurante){
        $details = array("Nombre del restaurante",//Nombre del restaurante
                        //SLIDE 1
                        //SLIDE 2
                        //SLIDE 3
                            "Saludo",// Saludo
                            "Texto principal", //Texto principal
                            "Eslogan" // Eslogan
                        );
        $images_routes = array(asset('assets/images/banners/banner1.png'),
                                asset('assets/images/banners/banner1.png'),
                                asset('assets/images/banners/banner1.png'));
        $menu = array(  "Salads",
                        "Soup",
                        "Main",
                        "Desserts",
                        "Drinks",
                        "Kids",
                        "none");
        $products = array("Producto 1",
                        "Producto 2",
                        "Producto 3",
                        "Producto 4",
                        "Producto 5",);
        $price = ("34.95");

        $social_media = array("https://www.facebook.com/",
                        "https://twitter.com/",
                        "https://www.instagram.com/");
        $restaurant_description = "Steak In has the perfect place to enjoy fine food and great cocktails with excellent service, in comfortable atmospheric surroundings. We have a soft dining room, combined with an open kitchen, coffee take out bar.";
        

        $logo = (asset('assets/images/logo/logo-light.png'));


        return view('paginaRestaurante.main',['nombre'=>$nombreRestaurante,'details'=>$details,'images_routes'=>$images_routes,"menu"=>$menu,"products"=>$products, "price"=>$price, "social_media"=>$social_media, "restaurant_description"=>$restaurant_description, "logo"=>$logo]);
    }
}  
