<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: white;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left {

                position: absolute;
                top: 10px;
                left: 200px;

            }

            .content {
                text-align: center;
                font-size: 35px;
                color: black;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 25px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }



            *{

                margin: 0;
                padding: 0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

           header {
               width: 100%;
           }
           .navegacion{
               width: 1500px;
               margin: 30px auto;
               background: purple;
           }

           .navegacion ul{
               list-style: none;
           }
           .menu > li {

               position: relative;
               display: inline-block;
           }
           .menu > li > a{
               display: block;
               padding: 15px 20px;
               color: black;
               font-family: 'Open sans';
               text-decoration: none;
           }

           .menu li a:hover{
               color: yellow;
               transition: all .3s;

           }

           .wp-block-column[style*="flex-basis"] {
                flex-grow: 0;
            }

        </style>
    </head>
    <body>
            
            <header>
                <nav class="navegacion">
                    <ul class="menu">
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                        <li><a href="{{ url('/about') }}">A cerca de </a></li>
                        <li><a href="{{ url('/contact') }}">Contacto</a></li>
                        <li><a href="{{ url('/vivienda/create') }}"> Añadir viviendas</a></li>
                    </ul>
            </header>





        <div class="flex-center position-ref full-height">
            
            
            <div class="content">
                
                 Empresa con más de 10 años de experiencia en el sector, nuestro lema es “A problemas soluciones”, intentamos buscar soluciones a aquellos clientes que necesitan un cambio de vivienda o en general de vida. Gestionamos la venta, la compra o la financiación  de su nuevo hogar. Le ofrecemos transparencia y confianza en nuestra gestión, formalidad y seriedad. Estamos a su disposición en nuestra oficina, nos adaptamos a su horario y a sus circunstancias. <br>

                 <img loading="lazy" src="http://dydpisosycasas.es/wp-content/uploads/2020/11/imagen_2020-11-16_234251.png" alt="" class="wp-image-112" width="657" height="599"><br>

                <div class="wp-block-column" style="flex-basis:25%">
                  <h3>AGENCIA INMOBILIARIA Y DE FINANCIACIÓN</h3>



                    <p>Gestionamos la venta, la compra y la financiación independientes.</p>



                    <ul><li>Alquiler</li><li>Seguros de Protección de pagos</li><li>Certificados Energéticos.</li><li>Inscripción de Herencias, VPO, Obra Nueva</li></ul>
                </div>
                
            </div>


        </div>
    </body>
</html>