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
                background-color: #fff;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

                <<div class="top-right links">

                <a href="{{ url('/') }}">Inicio</a>
                <a href="{{ url('/about') }}">A cerca de </a>
                <a href="{{ url('/contact') }}">Contacto</a>

                </div>

            <div class="content">
                <div class="title m-b-md">
                    Acerca sobre nosotros 


                <p>Empresa con mas de 10 años en el sector y concretamente en la zona del Poligonosur, nuestro lema es "A problemas soluciones"</p>
                <p>intentamos buscar soluciones a aquellos clientes que nhecesitan u cambio de vivienda o en general de vida.</p>
                <p>Gestionamos la compra, venta o la financiación de su nuevo hogar. Le ofrecemos transparencia y confianza en nuestra gestion, formalidad y seriedad</p>
                <p> Estamos a su disposicion en nuestra oficina, nos adaptamos a su horario y a sus circustancias</p>                
                
                </div>
                <div class="quote">Pagina de informacion de nuestro sistio</div>
                <div class="footer"> <strong>Todos los derechos reservados</strong> </div>
                
<!--
                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                -->
            </div>
        </div>
    </body>
</html>