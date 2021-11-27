<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/index.css')}}" rel="stylesheet">
    <title>Food Court PTY</title>
</head>
<body>
    <section class="container_page">
        <header>
        <nav class="navbar">
                <a href="#">
                <img class="img_logo" src="{{asset('assets/images/logo/StyleSolution.png')}}" alt="foodcourtpty">
            </a>
                <ul>
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li><a href="#">Store</a>
                    </li>
                </ul>
            </nav>
        </header>

        <section class="contenido">



        <div id="headerwrap">
	    <div class="container">
			<div class="row">
				<div class="">
					<h4>HOLA, SOMOS</h4>
					<h1>FOOD COURT PTY</h1>
					<h4>NOS CARACTERIZAMOS POR BRINDAR UNA EXPERIENCIA DE CALIDAD </h4>
				</div>
			</div>
	    </div> 
	</div>
	
	<section id="works"></section>
	<div class="container">
    <h1>Restaurantes</h1>
		<div class="container_restaurant">
        @foreach($restaurant as $restaurants)
			<div class="gallery">
				<a href=""><img src="{{$restaurants}}" class="img__responsive"></a>
			</div>
        @endforeach

		</div>
	</div>




        <section class="container2">

        <div>
            <div class="navbar__left">
                <a href="">
                    <img src="{{asset('assets/icons/facebook.png')}}" alt="f">
                </a>
                <a href="">
                
                     <img src="{{asset('assets/icons/twitter.png')}}" alt="t">
                
                </a>
                <a href="">
                     <img src="{{asset('assets/icons/instagram.png')}}" alt="i">
                </a>
                <a href="">   
                    <img src="{{asset('assets/icons/mas.png')}}" alt="i">     
                </a>
            </div>           
        </div >
        <a href="https://www.youtube.com/" class="container__whatsapp">
            <div>
                <img src="{{asset('assets/icons/whatsapp.png')}}" alt="whatsapp">
            </div>
        </a>





                    


   



    </section>
        </section>

        <footer>
            <section class="footer_one">
                <div class="space_one">
                    <h1>Sobre Nosotros</h1>
                    <div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi debitis eos cum quo explicabo nemo magnam et inventore fuga. Adipisci obcaecati nesciunt exercitationem accusamus corrupti earum, voluptates aliquam asperiores iure.</p>
                    </div>
                </div>
                <div class="space_one">
                    <h1>Paginas</h1>
                    <div>
                        <a href="">Home</a>
                        <a href="">About</a>
                        <a href="">Restaurant</a>
                    </div>
                </div>
                <div class="space_one">
                    <h1>Contactanos</h1>
                    <div>
                    <p>Tel:       +507 6666-6666</p> 
                    <p>Mail:      suport@stylesolution.com</p> 
                    <p>Ubicación: La Chorrera, Panama Oeste</p> 
                    </div>
                </div>


                        <!-- <div class="contact">
                            <img src="{{asset('assets/icons/tel.png')}}" alt="tel">
                            <p>+507 6666-6666</p>
                        </div>
                        <div class="contact">
                            <img src="{{asset('assets/icons/email.png')}}" alt="mail">
                            <p>suport@stylesolution.com</p>
                        </div>
                        <div class="contact">
                            <img src="{{asset('assets/icons/location.png')}}" alt="location">
                            <p>La Chorrera, Panama Oeste</p> -->

            </section>
            <section class="footer_two">
                <div>
                    <p>Copyright © 2021 Style Solution. All Rights Reserved </p>
                </div>
                <div>
                    <ul>
                        <li>
                            <a href="">FoodCourtPTY</a>
                        </li>
                        <li>
                            <a href="">Laboratorio</a>
                        </li>

                    </ul>
                </div>
            </section>
        </footer>
    </section>
    

</body>
</html>